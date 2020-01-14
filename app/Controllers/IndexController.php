<?php
namespace App\Controllers;
use Core\Controller;
use Core\Request;
use Carbon\Carbon;
use Core\Auth;
use Core\Session;
use App\Models\Attendance;
use App\Models\User;
use App\Models\Setting;
/**
* 
*/
class IndexController extends Controller
{
    public $request;

    function __construct()
    {
        parent::__construct();
        if (!Auth::check()){
            Session::flash('error','You have been logged out of system, please log in again');
            return redirect('/');
        }
    }

    public function index()
    {
        $data = [
            'title'=> 'site title',
        ];

        return view('index',$data);
    }

    public function dashboard()
    {
        $user = User::with('roles.permissions')->whereId(Session::get('user')['id'])->first();
        // return response($user->roles[0]->permissions);
        $summaries = Attendance::where('user_id',auth()->id)->latest()->get();
        return view('index',compact('summaries'));
    }
    
    public function punch()
    {
        $settings = Setting::where('option','working_hours')->first();
        $workingHours = (int)$settings->value;
        $today = $date = Carbon::today();
        $fullfilled = false;
        $punchCheck = Attendance::where('user_id', Auth::id())
                                ->whereDate('created_at', $today)
                                ->first();
        if ($punchCheck && $punchCheck->punch_in != NULL && $punchCheck->punch_out !='00:00:00'){
            $fullfilled = true;
        }

        $data = [
            'punchCheck' => $punchCheck,
            'fullfilled' => $fullfilled,
            'workingHours' => $workingHours
        ];
        return view('user.punch',$data);
    }

    public function postPunch()
    {
        $settings = Setting::where('option','working_hours')->first();
        $workingHours = (int)$settings->value;
        $date = Carbon::now()->toDateString();
        $today = $date = Carbon::today();
        $time = Carbon::now()->format('H:i:s');
        $exists = Attendance::where('user_id', Auth::id())
                            ->whereDate('created_at', $today)
                            ->first();

        if ($exists){
            $diff = Carbon::parse($exists->punch_in)->diffInHours(Carbon::now()->format('H:i:s'));
            if($diff < $workingHours){
                Session::flash('warning','You cannot punch out before your working time');
                return back();
            }
            $updated = Attendance::where('user_id',Auth::id())
                ->whereDate('created_at',$today)
                ->update(['punch_out'=> $time]);
            if ($updated) {
                Session::flash('success','Punched out successfully');
                return redirect('/punch');
            }
        }
        $flag = Attendance::create([
            'user_id' => Auth::id(),
            'date' => $date,
            'punch_in' => $time,
            'note' => Request::get('note'),
        ]);

        if ($flag){
            Session::flash('success','Punched in successfully');
            return redirect('/punch');
        }
    }

}



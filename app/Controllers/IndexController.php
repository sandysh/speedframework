<?php
use Core\Controller;
use Core\Request;
use Carbon\Carbon;
use Core\Auth;
use Core\Session;
use App\Models\Attendance;
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

//        $this->load->view('index',$data);
        return view('index',$data);
    }

    public function dashboard()
    {
        return view('index');
    }
    
    public function punch()
    {
        $today = $date = Carbon::today();
        $filfilled = false;
        $punchCheck = Attendance::where('user_id', Auth::id())
                                ->whereDate('created_at', $today)
                                ->first();
        if ($punchCheck->punch_in != NULL && $punchCheck->punch_out !=NULL){
            $fullfilled = true;
        }

        $data = [
            'punchCheck' => $punchCheck,
            'fulfilled' => $fullfilled
        ];
        return view('user.punch',$data);
    }

    public function postPunch()
    {
        $date = Carbon::now()->toDateString();
        $today = $date = Carbon::today();
        $time = Carbon::now()->format('H:i:s');
        $exists = Attendance::where('user_id', Auth::id())
                            ->whereDate('created_at', $today)
                            ->first();

        if ($exists){
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



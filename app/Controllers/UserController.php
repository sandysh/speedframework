<?php
namespace App\Controllers;
use Core\Controller;
use App\Models\User;
use Core\Request;
use Core\Session;
use Core\Database as DB;

/**
*
*/
class UserController extends Controller
{
    public $request;

    function __construct()
    {
        parent::__construct();
        $this->request = new Request();
    }

    public function index()
    {
        $users = User::paginate();
        return view('admin.user.index',compact('users'));
    }

    public function changeStatus($id)
    {
        $msg = '';
        $user = User::find($id);
        if($user->status === 0){
            $user->status = 1;
            $msg='activated';
        } else {
            $user->status = 0;
            $msg = 'deactivated';
        }
        $user->update(['status'=>$user->status]);
        Session::flash("success","$user->first_name $user->last_name has been successfully $msg");
        return back();

    }

}



<?php
use Core\Controller;
use Core\Request;
use Core\Session;
use App\Models\User;
/**
*
*/
class LoginController extends Controller
{
    public $request;
    function __construct()
    {
        parent::__construct();
        $this->request = new Request();
    }

    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        $email = $this->request->email;
        $password = $this->request->password;
        $user = User::where('email',$email)->first();
        if (!$user){
            Session::flash('error','Email address not valid');
            return back();
        }
        if ($password != $user->password){
            Session::flash('error','Password mismatch');
            return redirect('/');
        }

        return redirect('/dashboard');
    }

}



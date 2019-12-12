<?php
namespace Core;
use Core\Session;

class Auth{

    function __construct()
    {
        foreach($_SESSION['user'] as $key => $user){
            $this->{$key} = $user;
        }
    }

    public static function check()
    {
        if (Session::has('user')){
            return true;
        } return false;
    }

    public static function user()
    {
        return Session::get('user');
    }

    public static function id()
    {
        return Session::get('user')['id'];
    }

    public static function logout()
    {
        Session::destroy();
        return redirect('/');
    }

}
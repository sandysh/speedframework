<?php
namespace Core;
use Core\Session;

class Auth{

    function __construct()
    {

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

}
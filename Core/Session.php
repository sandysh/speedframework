<?php
namespace Core;

class Session{

    function __construct()
    {

    }

    public static function flash($type, $msg)
    {
        $_SESSION[$type] = $msg;
    }

    public static function has($type)
    {
        if (isset($_SESSION[$type])){
            return true;
        } return false;
    }

    public static function get($type)
    {
        echo $_SESSION[$type];
        unset($_SESSION[$type]);
    }

}


?>
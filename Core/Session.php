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

    public static function show($type)
    {
        echo $_SESSION[$type];
        unset($_SESSION[$type]);
    }

    public static function put($index,$data)
    {
        $_SESSION[$index] = $data;
    }

    public static function get($index = null)
    {
        if ($index != null){
            return $_SESSION[$index];
        } return $_SESSION;
    }

}


?>
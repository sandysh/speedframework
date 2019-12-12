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

    public static function destroy()
    {
        $_SESSION = array();

        session_unset();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
     }

}


?>
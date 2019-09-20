<?php
namespace Core;
/**
* 
*/
class Request
{

    function __construct()
    {
        $requests = $_REQUEST;
        foreach ($requests as $key => $req){
            $this->{$key} = $req;
        }
    }
    

    public static function get($variable)
    {
        return $_GET[$variable];
    }

    public static function post($variable)
    {
        return $_POST[$variable];
    }
    
    public static function all()
    {
        return $_REQUEST;
    }
    
    public function only($arg)
    {
        return $_REQUEST[$arg];
    }
    
    public function except()
    {
        $args = func_get_args();
        foreach ($args as $key => $arg) {
            unset($_REQUEST[$arg]);
        }
        return $_REQUEST;
    }
}

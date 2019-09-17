<?php
use Core\Load;

if (!function_exists('dd')) {
    function dd()
    {
        $args = func_get_args();
        foreach ($args as $arg)
        {
            echo "<pre>";
            echo json_encode($arg);
            echo "</pre>";
        }
       die();
    }
}

if (!function_exists('return_response')) { 
function response($data)
    {
        echo "<pre>";
        echo json_encode($data);
        echo "</pre>";
    }
}

if (!function_exists('view')) {
    function view($view,$data = null)
    {
        $load = new Load();
        $load::view($view, $data);
    }
}

if (!function_exists('asset')){
    function asset($link)
    {
        echo app_path().'/public/assets/'.$link;
    }
}
if (!function_exists('app_path')){
    function app_path()
    {
        echo getenv('APP_URL');
    }
}


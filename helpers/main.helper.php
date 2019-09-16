<?php
use Core\Load;
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
        $load::view($view, $data = null);
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


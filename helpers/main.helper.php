<?php

use Core\Load;
use Core\Bcrypt;

if (!function_exists('dd')) {
    function dd()
    {
        $args = func_get_args();
        foreach ($args as $arg)
        {
            echo "<pre>";
            var_dump($arg);
        }
       die();
    }
}

if (!function_exists('response')) {
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

if (!function_exists('bcrypt')){
    function bcrypt($password)
    {
        $bcrypt = new Bcrypt(15);
        return $bcrypt->hash($password);
    }
}

if (!function_exists('verify')){
    function verify($password, $hash)
    {
        $bcrypt = new Bcrypt(15);
        return $bcrypt->verify($password, $hash);
    }
}

if (!function_exists('showAutoLoadedFiles')){
    function showAutoLoadedFiles()
    {
       return get_included_files();
    }
}
if (!function_exists('redirect')){
    function redirect($url)
    {
       return header("Location: $url");
    }
}
if (!function_exists('back')){
    function back()
    {
        $referrer = $_SERVER['HTTP_REFERER'];
       return header("Location: $referrer");
    }
}


if (!function_exists('flash')){
    function flash($type, $msg)
    {

    }
}



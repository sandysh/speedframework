<?php

use Core\Load;
use Core\Bcrypt;
use Core\Auth;
use App\ACL\Permissions;
use Core\Database;
use Jenssegers\Blade\Blade;

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

if (!function_exists('dump')) {
    function dump()
    {
        $args = func_get_args();
        foreach ($args as $arg)
        {
            echo "<pre>";
            var_dump($arg);
        }
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
        $blade = new Blade('views', 'cache');
        $dbase = new Database();
        $db = $dbase->getCapsuleInstance();
        if($data){
            $blade->share('db',$db);
            echo $blade->make($view, $data);
        } else {
            echo $blade->make($view);
        }
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


if (!function_exists('segments')){
    function segments($offset=NULL)
    {
        $host = $_SERVER['HTTP_HOST'];
        $path = $_SERVER['PATH_INFO'];
        $uri = $host . $path;
        $exploded_uri = explode('/',$uri);
        if($offset != NULL){
            return $exploded_uri[$offset];
        }
        return $exploded_uri;
    }
}

if(!function_exists('active')){
    function active($menu)
    {
        if(in_array($menu,segments())){
            echo 'active';
        }
    }
}

if(!function_exists('auth')){
    function auth()
    {
        $auth = new Auth;
        return $auth;
    }
}

if(!function_exists('logout')){
    function logout()
    {
        $auth = new Auth;
        return $auth->logout();
    }
}


if(!function_exists('compact')){
    function compact()
    {
        $args = func_get_args();
        $array = [];
        foreach($args as $arg){
            $array[$arg] = $arg;
        }
        return $array;
    }
}



// if(!function_exists('can')){
//     function can($perm)
//     {
//         $can = false;
//         $permissions = new Permissions();
//         $roles_permissions = $permissions->getRolesAndPermissions();

//             foreach($roles_permissions as $role){
//                 foreach($role->permissions as $permission){
//                     if($perm === $permission->slug){
//                         $can = true;
//                     }
//                 }
               
//             }

//             return $can;
//     }
// }


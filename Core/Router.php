<?php

class Router
{
    public static function get($url, $routes)
    {
        $router = new static();
        $uri = trim($_SERVER['REQUEST_URI'],'/');
        $uri_segements = explode('/',$uri);
        $url_segments = explode('/',$url);
//        $flag = strpos(file_get_contents("./routes.php"),'user/status');
        foreach($url_segments as $key => $segments){
            if(strpos($segments,'{') !== false){
                dump('yes');
            } else {
                dump('No');
            }
        }
//        if($url === $uri)
//        {
//            dd('url match');
//            return $router->redirectMethod($uri, $routes);
//        }
//        if ($uri === ""){
//            $uri = "/";
//        }
//        $url = trim($url,'/');
//        if ($url === ""){
//            $url = "/";
//        }
//        dd($uri, $url);

//         if( $flag === false) {
//
//             $router->notFoundException('Route not found exception');
//
//         }

    }

    public static function post($url, $routes)
    {
        $router = new static();
//        if($router->method != "POST"){
//            return $router->notFoundException('Route method mismatch exception');
//        }
        $uri = trim($_SERVER['REQUEST_URI'],'/');
        $url = trim($url,'/');
        if($url === $uri)
        {
            return $router->redirectMethod($uri, $routes);
        }
    }


    public function notFoundException($msg)
    {
        echo "<pre>";
        throw new Exception($msg);
    }

    public function redirectMethod($uri, $routes)
    {
        $data = explode('@', $routes);
        $controller = $data[0];
        $method = $data[1];
        require_once './app/Controllers/'.$controller.'.php';
        $obj = new $controller;
        $uri = explode('/', $uri); //explode entire URI to get the parameter if passed
        $parameters = [];

        foreach (array_slice($uri,1) as $value) {

            $parameters[] = $value;
        }


        call_user_func_array([$obj,$method], $parameters);

    }
}
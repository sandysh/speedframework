<?php

class Router
{
    protected $route;

    protected $all_url = [];

    protected $method;

    function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function get($url, $routes)
    {
        if(!$this->method === "GET"){
            $this->notFoundException('Route method mismatch exception');
        }
        $uri = trim($_SERVER['REQUEST_URI'],'/');
        if($url === $uri)
        {
            $this->redirectMethod($uri, $routes);
        }
    }

    public function post($url, $routes)
    {
        if(!$this->method === "POST"){
            $this->notFoundException('Route method mismatch exception');
        }
            $uri = trim($_SERVER['REQUEST_URI'],'/');
            if($url === $uri)
            {
                $this->redirectMethod($uri, $routes);
            }
    }

    public function notFoundException($msg)
    {
        throw new Exception($msg);
    }

    public function redirectMethod($uri, $routes)
    {
        $data = explode('@', $routes);
        $controller = $data[0];
        $method = $data[1];
        require './app/Controllers/'.$controller.'.php';
        $obj = new $controller;
        $uri = explode('/', $uri); //explode entire URI to get the parameter if passed
        $parameters = [];

        foreach (array_slice($uri,1) as $value) {

            $parameters[] = $value;
        }


        call_user_func_array([$obj,$method], $parameters);

    }

    public function redirect($uri,$routes)
    {
        // var_dump($routes);
        if(array_key_exists($uri, $routes)){

            $data =  $routes[$uri];

            $data = explode('@', $data); //explode the total route

            $method = $data[1]; //get method name

            $url = $data[0]; //get path of the controller

            $controller = explode('/', $url);
            $controller_class = explode('.',$controller[1]);
            //echo $controller_class[0];
            require './app/Controllers/'.$controller_class[0].'.php';

            // create new instance of matched controller
            $obj = new $controller_class[0];

            // check to see if the existing URI has some parameters

            $uri = explode('/', $uri); //explode entire URI to get the parameter if passed

            $parameters = [];


            foreach (array_slice($uri,1) as $value) {

                $parameters[] = $value;
            }


            call_user_func_array([$obj,$method], $parameters);

        }else{
            echo "Route Not found";

        }
    }
}

$router = new Router();
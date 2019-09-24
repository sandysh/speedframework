<?php
namespace Core;
use Core\Load;

class Controller
{
    protected $load;

    protected $flash;
        
    function __construct()
    {
        $this->load = $this->Load();
    }
    
    private function load()
    {
        return new Load();
    }
    
}

// $controller = new Controller();
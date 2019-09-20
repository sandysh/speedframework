<?php
namespace Core;
use Jenssegers\Blade\Blade;
use Core\Session;
/**
* 
*/
class Load
{   

    public static function view($view, $data=null)
    {
        $blade = new Blade('views', 'cache');

        if($data){
            echo $blade->make($view, $data);
        } else {
            echo $blade->make($view);
        }
    }

//    public function helper($helper)
//    {
//        require './helpers/'.$helper.'.helper.php';
//    }

    public function library($library)
    {
        require './libraries/'.$library.'.library.php';
    }
    
    public static function check()
    {
        var_dump("expression and here");
    }

}


// $load = new Load();

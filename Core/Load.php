<?php
namespace Core;
use Core\Session;
use Core\Database;
/**
* 
*/
class Load
{ 
    protected $db;

    function __construct($db)
    {
        $this->db = $db;
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

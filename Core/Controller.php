<?php
namespace Core;
use Core\Load;
use Core\Database;
class Controller
{
    protected $load;

    protected $flash;

    protected $db;
        
    function __construct()
    {
        $dbase = new Database();
        $this->db = $dbase->getCapsuleInstance();
        $this->load = $this->Load();
    }
    
    private function load()
    {
        return new Load($this->db);
    }
    
}

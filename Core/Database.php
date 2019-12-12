<?php
 namespace Core;
use \Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Database {
    public $capsule;
    function __construct()
    {
        $this->capsule = new Capsule;
        $this->capsule->addConnection([
        'driver' => getenv('DB_DRIVER'),
        'host' => getenv('DB_HOST'),
        'database' => getenv('DB_NAME'),
        'username' => getenv('DB_USER'),
        'password' => getenv('DB_PASS'),
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        ]);

        $this->capsule->setEventDispatcher(new Dispatcher(new Container));

        $this->capsule->setAsGlobal();
        // Setup the Eloquent ORM… 
        $this->capsule->bootEloquent();
        
    }

    public function getCapsuleInstance()
    {
        return $this->capsule;
    }

}
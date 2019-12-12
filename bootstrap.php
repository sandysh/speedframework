<?php
session_start();
require 'Core/Router.php';
require 'vendor/autoload.php';
require 'app/Config/Config.php';

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

if(getenv('APP_DEBUG')){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} 
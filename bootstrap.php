<?php
session_start();
require 'Core/Router.php';
require 'vendor/autoload.php';
require 'Core/Database.php';
require 'app/Config/Config.php';

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

use Core\Database;
$db = new Database();
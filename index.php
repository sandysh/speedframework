<?php

require('bootstrap.php');
use \Pecee\SimpleRouter\SimpleRouter as Route;
Route::setDefaultNamespace('\App\Controllers');
require 'routes.php';
Route::start();


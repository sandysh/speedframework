<?php
/**
* 
*/
use \Pecee\SimpleRouter\SimpleRouter as Route;

Route::get('/','LoginController@index');
Route::get('/login','LoginController@index');
Route::get('/logout','LoginController@logout');
Route::post('/authenticate','LoginController@authenticate');
Route::get('/dashboard','IndexController@dashboard');
Route::get('/punch','IndexController@punch');
Route::post('/store/punch','IndexController@postPunch');
Route::get('/payroll','PayrollController@index');

/*User related routes*/
Route::get('/users','UserController@index');
Route::get('/user/status/{id}','UserController@changeStatus');

//Report related routes

Route::get('reports','ReportsController@index');

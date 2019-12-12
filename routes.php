<?php

/**
* 
*/

 Router::get('/','LoginController@index');
 Router::get('','LoginController@index');
 Router::get('/login','LoginController@index');
 Router::get('/logout','LoginController@logout');
 Router::post('/authenticate','LoginController@authenticate');
 Router::post('/dashboard','IndexController@dashboard');
 Router::get('/punch','IndexController@punch');
 Router::post('/store/punch','IndexController@postPunch');

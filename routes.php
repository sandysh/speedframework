<?php

/**
* 
*/

 Router::get('/','LoginController@index');
 Router::post('/authenticate','LoginController@authenticate');
 Router::post('/dashboard','IndexController@dashboard');
 Router::get('/punch','IndexController@punch');
 Router::post('/store/punch','IndexController@postPunch');

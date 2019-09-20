<?php

/**
* 
*/

 Router::get('/','LoginController@index');
 Router::post('/authenticate','LoginController@authenticate');
 Router::get('/dashboard','IndexController@dashboard');

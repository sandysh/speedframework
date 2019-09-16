<?php

/**
* 
*/

 Router::get('','IndexController@index');
 Router::get('/','IndexController@index');
 Router::get('test', 'TestController@index');
// Router::post('test/post', 'TestController@postData');


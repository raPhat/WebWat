<?php
if( !defined("webStart") ) { exit(0); }

require_once('Route.php');

Route::get('/','pagesController@home');
Route::get('/home','pagesController@home');
Route::post('/home','pagesController@test');

Route::error();
<?php
if( !defined("webStart") ) { exit(0); }

require_once('Route.php');

Route::get('/','pagesController@home');
Route::get('/home/{id}','pagesController@home', ['id'=>'/[0-9]/']);
Route::get('/test','pagesController@test');

Route::error();
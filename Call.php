<?php
if( !defined("webStart") ) { exit(0); }

require_once('Route.php');

Route::get('/','homeController@page');
Route::get('/home','homeController@page');
//Route::get('/home/{id}','pagesController@home', ['id'=>'/[0-9]/']);
Route::get('/history','historyController@page');
Route::get('/importantplace','importantplaceController@page');
Route::get('/gallery','galleryController@page');
Route::get('/guestbook','guestbookController@page');
Route::get('/contact','contactController@page');
Route::get('/map','mapController@page');

Route::get('/admin','adminController@index');
Route::get('/admin/history','adminController@history');
Route::get('/admin/importantplace','adminController@importantplace');
Route::get('/admin/logout','adminController@logout');
Route::post('/admin/login','adminController@login');
Route::post('/admin/history','adminController@saveHistory');

Route::error();
<?php
Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/student', 'StudentController@index');
Route::get('/vuz', 'VuzController@index');
Route::get('/employer', 'EmployerController@index');
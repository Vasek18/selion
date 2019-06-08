<?php
Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(
    [
        'prefix' => 'student',
    ],
    function () {
        Route::get('/', 'StudentController@index');
        Route::get('/tests', 'StudentController@tests')->middleware('student');
    }
);

Route::get('/vuz', 'VuzController@index');

Route::get('/employer', 'EmployerController@index');
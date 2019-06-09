<?php
Route::get('/', 'IndexController@index')->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(
    [
        'prefix'     => 'student',
        'middleware' => ['student'],
    ],
    function () {
        Route::get('/', 'StudentController@index')->name('student');
        Route::get('/tests', 'StudentController@tests');
        Route::get('/tests/{test}', 'StudentController@showTest');
        Route::post('/tests/{test}', 'StudentController@answerTest');
    }
);

Route::get('/vuz', 'VuzController@index');

Route::get('/employer', 'EmployerController@index');
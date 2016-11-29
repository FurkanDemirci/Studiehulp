<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/home', 'HomeController@getHome')->name('home');
Route::get('/login', 'HomeController@getLogin')->name('login');
Route::get('/student', 'HomeController@getStudent')->name('student');
Route::get('/begeleider', 'HomeController@getBegeleider')->name('begeleider');

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Route::get('/index', function() {
// 	return view('index');
// });

Route::get('/landing', 'CountryController@dropDown');

Route::post('/convert', 'CountryController@convertValues')->name('convert');

// Route::get('/landing', function () {
// 	return view('landingPage');
// });
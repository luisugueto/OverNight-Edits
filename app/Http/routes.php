<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cart', function () {
    return view('panel.upload');
});
Route::get('/images', function () {
    return view('panel.images');
});
Route::get('/upload', function () {
    return view('panel.upload');
});
Route::get('/plan', function () {
    return view('panel.plan');
});

Route::post('/upload-images', 'ImagesController@store');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

Route::get('/register', 'UserController@store');


Route::resource('images', 'ImagesController');
Route::resource('login', 'LoginController');
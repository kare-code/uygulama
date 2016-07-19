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

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/haberler', 'HaberController@index');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/haber-ekle', 'HaberController@haber_ekle');
    Route::post('/haber-ekle', 'HaberController@haber_kaydet');
});


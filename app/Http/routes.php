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

Route::get('/loremipsum','LoremController@getIndex');
Route::post('/loremipsum','LoremController@postIndex');

Route::get('/randomuser','RandomUserController@getIndex');
Route::post('/randomuser','RandomUserController@postIndex');

Route::get('/cat','CatController@getIndex');
Route::post('/cat','CatController@postIndex');

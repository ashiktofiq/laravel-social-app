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

Route::post('signup','UserController@postSignUp');
Route::post('signin','UserController@postSignIn');
Route::get('dashboard','PostController@getDashboard');
Route::post('createpost','PostController@createPost');
Route::get('delete-post/{post_id}','PostController@deletePost');
Route::get('logout','UserController@getLogout');
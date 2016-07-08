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
   //return view('welcome');
	return 'Welcome to Parths real estate business - options below -';
	return '/listings - all listings';
	return '/paged - ';
	return 'Welcome to Parths real estate business - options below -';
	//Route::get('foo', 'UserController@showProfile');
});

Route::get('/listings', function () {
    //return view('welcome');
	return 'cake here';
	//Route::get('foo', 'UserController@showProfile');
	//return 'Need Food?';
});

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//So that you meet a welcoming page
Route::get('/', function()
{
	return View::make('hello');
});

//Creating a login page for the two-step
Route::get('twostep', function()
{
	return View::make('twostep');
});

//Two-step generating
Route::post('twostep', 'TwoController@index');

//Does it work?
Route::get('imagetest', function()
{
	return View::make('imagetest');
});


// http://packalyst.com/packages/package/edisonthk/google-oauth-laravel4
Route::controller('gauth', 'AuthOneController');

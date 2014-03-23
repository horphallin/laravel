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

/*
Route::get('/', function() {
	return View::make('hello');
});
*/
Route::get('/', 'UsersController@getIndex');

Route::get('test', function() {
	return View::make('hello');
});
Route::get('user', function()
{
	return 'User!';
});
Route::get('create', 'WelcomeController@index');
Route::resource('welcome', 'WelcomeController');
Route::controller('demo1', 'DemoController');
Route::controller('users', 'UsersController');
Route::resource('nerds', 'NerdsController');
Route::get('userLayout', function() {
	return View::make('user');
});

Route::get('password/reset', array(
	'uses' => 'PasswordController@remind',
	'as' => 'password.remind'
));

Route::post('password/reset', array(
	'uses' => 'PasswordController@request',
	'as' => 'password.request'
));
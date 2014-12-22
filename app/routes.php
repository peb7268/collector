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

Route::get('/', 'HomeController@index');
Route::get('/register', 'UsersController@register');
Route::get('/login', 'UsersController@login');

Route::post('/auth', 'UsersController@auth');

Route::group(array('before' => 'auth', 'prefix' => 'admin'), function()
{
    Route::post('/', 	'UsersController@admin_home');
});
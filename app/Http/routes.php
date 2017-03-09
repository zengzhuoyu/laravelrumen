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

Route::get('/', 'StaticPagesController@home')->name('homes');
Route::get('/help', 'StaticPagesController@help')->name('helps');
Route::get('/about', 'StaticPagesController@about')->name('abouts');

Route::get('signup', 'UserController@create')->name('signups');

Route::resource('users', 'UserController');

Route::get('login', 'SessionController@create')->name('logins');
Route::post('login', 'SessionController@store')->name('logins');
Route::delete('logout', 'SessionController@destroy')->name('logouts');

Route::get('signup/confirm/{token}', 'UserController@confirmEmail')->name('confirm_email');

Route::get('password/email', 'Auth\PasswordController@getEmail')->name('password.reset');
Route::post('password/email', 'Auth\PasswordController@postEmail')->name('password.reset');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset')->name('password.edit');
Route::post('password/reset', 'Auth\PasswordController@postReset')->name('password.update');

Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);
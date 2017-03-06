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

//用户注册
Route::get('/signup', 'UserController@create')->name('signups');
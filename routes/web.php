<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//------------------------------------------------SITE----------------------------------------------------------------//
Route::get('/', 'SiteController@getIndex');
Route::get('setlocale/{locale}', 'SiteController@setLocale');



//--------------------------------------------ADMIN PANEL-------------------------------------------------------------//
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    Route::get('/', 'Admin\AdminController@getindex');
});

Route::any('/login', 'Admin\AdminController@login');
Route::get('/logout', 'Admin\AdminController@logout');
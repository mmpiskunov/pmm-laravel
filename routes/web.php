<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', 'UserProfile@index');

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::resource('profile', 'UserProfile');
/*
Route::any('/profile', 'UserProfile@index');
Route::any('/profile/add', 'UserProfile@add');
*/
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'UserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::put('/members', "UserController@store");
Route::get('/{id}', 'UserController@renderUser');
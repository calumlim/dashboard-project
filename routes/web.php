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

Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');
Route::get('/home/{name}', 'DashboardController@show');
Route::get('/home/{name}/edit', 'DashboardController@edit');
Route::patch('/home/{name}', 'DashboardController@update');
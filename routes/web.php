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



Auth::routes();

Route::get('/', 'HomeController@index');

Route::resource('profile', 'ProfileController');
Route::resource('user', 'UserController');
Route::resource('roles', 'RolesController');
Route::resource('dashboard', 'DashboardController');
Route::resource('building', 'BuildingController');
Route::resource('romm', 'RoomsController');
Route::resource('keys', '_KeysController');

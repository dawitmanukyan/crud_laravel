<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/user', 'App\Http\Controllers\UserController@hello');
Route::get('/user/create', 'App\Http\Controllers\UserController@create');
Route::get('/user/read', 'App\Http\Controllers\UserController@read');
Route::get('/user/update', 'App\Http\Controllers\UserController@update');
Route::get('/user/delete', 'App\Http\Controllers\UserController@delete');

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

Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'UserController@index');
    Route::get('{id}/detail', 'UserController@detail')->name('user.detail');
    Route::get('{id}/edit', 'UserController@edit')->name('user.edit');
});
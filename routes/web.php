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

// Route::group(['prefix' => 'user'], function () {
//     Route::get('/', 'UserController@index')->name('user');
//     Route::get('{id}/detail', 'UserController@detail')->name('user.detail');
//     Route::get('{id}/edit', 'UserController@edit')->name('user.edit');
// });

Route::group(['prefix' => 'student'], function () {
    Route::get('/', 'StudentController@index')->name('student.list');

    Route::get('/create', 'StudentController@create')->name('student.create');
    Route::post('/create', 'StudentController@store')->name('student.store');

    Route::get('{id}/detail', 'StudentController@detail')->name('student.detail');
    Route::get('{id}/edit', 'StudentController@edit')->name('student.edit');
});

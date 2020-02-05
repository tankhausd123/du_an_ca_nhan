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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('/user')->middleware('auth')->group(function (){
    Route::get('/list', 'UserController@home')->name('home');
    Route::get('create', 'UserController@create')->name('user.create');
    Route::post('create', 'UserController@store')->name('user.store');
    Route::get('{id}/edit', 'UserController@edit')->name('user.edit');
    Route::post('{id}/update', 'UserController@update')->name('user.update');
    Route::get('{id}/delete', 'UserController@delete')->name('user.delete');
});

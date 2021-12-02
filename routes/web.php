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
    return view('userdata');
});

Route::get('/userdata', 'App\Http\Controllers\UserdataController@index')->name('userdata.list'); 
Route::get('create', 'App\Http\Controllers\UserdataController@create')->name('userdata.create');
Route::post('store', 'App\Http\Controllers\UserdataController@store')->name('userdata.store');
Route::get('edit/{id}', 'App\Http\Controllers\UserdataController@edit')->name('userdata.edit');
Route::post('update/{id}', 'App\Http\Controllers\UserdataController@update')->name('userdata.update');
Route::post('destroy/{id}', 'App\Http\Controllers\UserdataController@destroy')->name('userdata.destroy');

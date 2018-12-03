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

Route::get('/', 'EventController@index')->name('home');
Route::get('/evento/{id}', 'EventController@show')->name('events.show');
Route::middleware('auth')->group(function () {
    Route::post('/evento/{id}/purchased', 'EventController@purchased')->name('events.purchased');
    Route::post('/evento/{id}/store', 'EventController@store')->name('events.store');
});

Auth::routes();
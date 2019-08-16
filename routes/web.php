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
    return view('mtchome');
});

//Auth::routes();

Auth::routes(['verify' => true, 'register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
//training center
Route::get('/training/venue', 'HomeController@venue')->name('venue');
Route::get('/training/venueRes', 'HomeController@venueRes')->name('venueRes');
Route::get('/training/venueAlloc', 'HomeController@venueAlloc')->name('venueAlloc');

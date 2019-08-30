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
//venue
Route::get('/training/venue', 'HomeController@venue')->name('venue');
Route::get('/training/addvenue', 'HomeController@addvenue')->name('addvenue');
Route::post('/savevenue','HomeController@savevenue');
Route::get('/delete_venue/{id}','HomeController@delete_venue');
Route::get('/edit_venue/{id}','HomeController@edit_venue')->name('edit_venue');
Route::post('/update_venue/{id}','HomeController@update_venue');

Route::get('/training/venueRes', 'HomeController@venueRes')->name('venueRes');
Route::get('/training/venueAlloc', 'HomeController@venueAlloc')->name('venueAlloc');

//user
Route::get('/admin/user', 'HomeController@user')->name('user');
Route::get('/admin/adduser', 'HomeController@adduser')->name('add_user');
Route::post('/saveuser','HomeController@saveuser');
Route::get('/delete_user/{id}','HomeController@delete_user');
Route::get('/edit_user/{id}','HomeController@edit_user')->name('edit_user');
Route::post('/update_user/{id}','HomeController@update_user');
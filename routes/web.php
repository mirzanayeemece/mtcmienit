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
include('traningcenter.php');


//maintenance
Route::get('/maintenance', 'AdminController@maintenance');

include('admin_routes.php');
include('hotel_routes.php');
include('hr_routes.php');
include('restaurant_routes.php');
include('inventory_routes.php');
include('account_routes.php');
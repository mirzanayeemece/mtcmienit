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
//venue reservation
Route::get('/training/venueRes', 'HomeController@venueRes')->name('venueRes');
Route::get('/training/addvenueRes', 'HomeController@addvenueRes')->name('addvenueRes');
Route::post('/savevenueRes','HomeController@savevenueRes');
Route::get('/delete_venueres/{id}','HomeController@delete_venueres');
Route::get('/edit_venueres/{id}','HomeController@edit_venueres')->name('edit_venueres');
Route::post('/update_venueres/{id}','HomeController@update_venueres');
//venue allocation
Route::get('/training/venueAlloc', 'HomeController@venueAlloc')->name('venueAlloc');

//user
Route::get('/admin/user/user', 'AdminController@user')->name('User');
Route::get('/admin/user/adduser', 'AdminController@adduser')->name('Add User');
Route::post('/saveuser','AdminController@saveuser');
Route::get('/delete_user/{id}','AdminController@delete_user');
Route::get('/edit_user/{id}','AdminController@edit_user')->name('Edit User');
Route::post('/update_user/{id}','AdminController@update_user');

//user-role
Route::get('/admin/user_role/userrole', 'AdminController@userrole')->name('User Role');
Route::get('/admin/user_role/adduserrole', 'AdminController@addrole')->name('Add User Role');
Route::post('/saverole','AdminController@saverole');
Route::get('/delete_user_role/{id}','AdminController@delete_user_role');
Route::get('/edit_user_role/{id}','AdminController@edit_user_role')->name('Edit User Role');
Route::post('/update_user_role/{id}','AdminController@update_user_role');

//role-wise-permission
Route::get('/admin/role_wise_permission/rolewisepermission', 'AdminController@role_wise_permission')->name('Role Wise Permission');

//change-password
Route::get('/admin/change_password/changepassword', 'AdminController@change_password')->name('Change Password');
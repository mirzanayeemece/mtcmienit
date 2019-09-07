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
Route::get('dynamic_dependent/fetch', 'HomeController@fetch')->name('dynamicdependent.fetch');
Route::post('/savevenueRes','HomeController@savevenueRes');
Route::get('/delete_venueres/{id}','HomeController@delete_venueres');
Route::get('/edit_venueres/{id}','HomeController@edit_venueres')->name('edit_venueres');
Route::post('/update_venueres/{id}','HomeController@update_venueres');
Route::get('/view_venueres/{id}','HomeController@view_venueres')->name('view_venueres');
 Route::get('pdf/{id}', 'HomeController@pdf');
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


//------HOTEL-MANAGEMENT-------//

//BUILDING
Route::get('/hotel_management/building/building_list', 'HotelController@building')->name('Buildings');
Route::get('/hotel_management/building/addbuilding', 'HotelController@add_building')->name('Add Building');
Route::get('/hotel_management/building/building_type_list', 'HotelController@building_type')->name('Building Types');
Route::get('/hotel_management/building/addbuildingtype', 'HotelController@add_building_type')->name('Add Building Type');
Route::post('/savebuilding','HotelController@save_building');
Route::post('/savebuildingtype','HotelController@save_building_type');
Route::get('/editbuilding/{id}','HotelController@edit_building')->name('Edit Building');
Route::post('/updatebuilding/{id}','HotelController@update_building');
Route::get('/deletebuilding/{id}','HotelController@delete_building');
Route::get('/editbuildingtype/{id}','HotelController@edit_building_type')->name('Edit Building Type');
Route::post('/updatebuildingtype/{id}','HotelController@update_building_type');
Route::get('/deletebuildingtype/{id}','HotelController@delete_building_type');


//FLOOR
Route::get('/hotel_management/floor/floor_list', 'HotelController@floor')->name('Floors');
Route::get('/hotel_management/floor/addfloor', 'HotelController@add_floor')->name('Add Floor');
Route::get('/hotel_management/floor/floor_type_list', 'HotelController@floor_type')->name('Floor Types');
Route::get('/hotel_management/floor/addfloortype', 'HotelController@add_floor_type')->name('Add Floor Type');
Route::post('/savefloor','HotelController@save_floor');
Route::post('/savefloortype','HotelController@save_floor_type');
Route::get('/editfloortype/{id}','HotelController@edit_floor_type')->name('Edit Floor Type');
Route::post('/updatefloortype/{id}','HotelController@update_floor_type');
Route::get('/deletefloortype/{id}','HotelController@delete_floor_type');
Route::get('/editfloor/{id}','HotelController@edit_floor')->name('Edit Floor');
Route::post('/updatefloor/{id}','HotelController@update_floor');
Route::get('/deletefloor/{id}','HotelController@delete_floor');

//ROOM
Route::get('/hotel_management/room/room_category_list', 'HotelController@room_category')->name('Room Categories');
Route::get('/hotel_management/room/addroomcategory', 'HotelController@add_room_category')->name('Add Room Category');
Route::get('/hotel_management/room/room_list', 'HotelController@room')->name('Rooms');
Route::get('/hotel_management/room/addroom', 'HotelController@add_room')->name('Add Room');
Route::post('/saveroom','HotelController@save_room');
Route::post('/saveroomcategory','HotelController@save_room_category');
Route::get('/editroomcategory/{id}','HotelController@edit_room_category')->name('Edit Room Category');
Route::post('/updateroomcategory/{id}','HotelController@update_room_category');
Route::get('/deleteroomcategory/{id}','HotelController@delete_room_category');
Route::get('/editroom/{id}','HotelController@edit_room')->name('Edit Room');
Route::post('/updateroom/{id}','HotelController@update_room');
Route::get('/deleteroom/{id}','HotelController@delete_room');

//RESERVATION
Route::get('/hotel_management/reservation/room_reservation_list', 'HotelController@room_reservation')->name('Room Reservations');
Route::get('/hotel_management/reservation/addreservation', 'HotelController@add_reservation')->name('Add Room Reservation');
Route::post('/savereservation','HotelController@save_reservation');
Route::get('/viewreservation/{id}','HotelController@view_reservation')->name('View Room Reservation');
Route::get('/editreservation/{id}','HotelController@edit_reservation')->name('Edit Room Reservation');
Route::post('/updatereservation/{id}','HotelController@update_reservation');
Route::get('/deletereservation/{id}','HotelController@delete_reservation');
Route::get('/makebooking/{id}','HotelController@make_booking');
Route::post('/savemakebooking','HotelController@save_make_booking');

//BOOKING
Route::get('/hotel_management/booking/booking_list', 'HotelController@room_booking')->name('Room Bookings');
Route::get('/hotel_management/booking/addbooking', 'HotelController@add_booking')->name('Add Room Booking');
Route::post('/savebooking','HotelController@save_booking');
Route::get('/makebilling/{id}', 'HotelController@make_billing')->name('Make Room Bill');
Route::get('/viewbooking/{id}','HotelController@view_booking')->name('View Room Booking');
Route::get('/editbooking/{id}','HotelController@edit_booking')->name('Edit Room Booking');
Route::post('/updatebooking/{id}','HotelController@update_booking');
Route::get('/deletebooking/{id}','HotelController@delete_booking');

//BILLING
Route::get('/hotel_management/billing/billing_list', 'HotelController@room_billing')->name('Room Billings');
Route::post('/savebilling','HotelController@save_billing');
Route::get('/viewbilling/{id}','HotelController@view_billing')->name('View Room Billing');
Route::get('/deletebilling/{id}','HotelController@delete_billing');
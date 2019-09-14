<?php
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
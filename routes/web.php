<?php

use Illuminate\Support\Facades\Route;

//----------------------------auth----------------------------------
Route::get('/', function () {return view('bizland');});
Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('admin-dashboard', 'AdminDashboardController@index')->middleware(['auth'])->name('admin-dashboard');

// //-----------------------Trackings------------------------------------------
// Route::post('admin-trackings/incoming-data/{port_id?}', 'TrackingController@inComingData')->name('admin-trackings.incoming-data');
// Route::post('admin-trackings/outgoing-data/{port_id?}', 'TrackingController@outGoingData')->name('admin-trackings.outgoing-data');
// Route::get('admin-trackings/status-ported/{id}/is-global/{is_global?}', [
//         'as' => 'status-ported', 
//         'uses' => 'TrackingController@setStatusPorted'
//     ]);
// Route::get('admin-trackings/status-deported/{id}/is-global/{is_global?}', [
//         'as' => 'status-deported', 
//         'uses' => 'TrackingController@setStatusDeported'
//     ]);
// //Route::get('admin-trackings/status-deported/{id}/is-global/{is_global?}', 'TrackingController@setStatusDeported')->name('admin-trackings.status-deported');
// Route::resource('admin-trackings', 'TrackingController');

// Route::get('admin-global-traffic', 'TrackingController@globalTrackingIndex')->name('admin-global-traffic');
// Route::get('admin-delivered-batches', 'TrackingController@deliveredBatchesIndex')->name('admin-delivered-batches');
// Route::post('admin-delivered-batches/data', 'TrackingController@deliveredBatchesData')->name('admin-delivered-batches.data');

// Route::post('admin-pricings/data', 'PricingController@data')->name('admin-pricings.data');
// Route::resource('admin-pricings', 'PricingController');

// Route::post('admin-users/data', 'UserController@data')->name('admin-users.data');
// Route::resource('admin-users', 'UserController');
// //--------------------------------client urls----------------------------------
// Route::post('client-booking/data', 'BookingController@data')->name('client-booking.data');
// Route::resource('client-booking', 'BookingController');
// Route::get('client-booking-pdf', 'ClientTrackingController@streamPdf')->name('client-booking-pdf');
// // Route::get('client-booking-pdf/{booking_id}', 'ClientDashboardController@sendPdf');
// Route::get('/pdf-links/{booking_id}', 'ClientTrackingController@streamPdf');
// Route::get('client-dashboard', 'ClientDashboardController@index')->name('client-dashboard');
// Route::get('client-trackings/index', 'ClientTrackingController@index')->name('client-trackings.index');
// Route::post('client-trackings/show', 'ClientTrackingController@showToClient')->name('client-trackings.show');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('home', 'ClientDashboardController@home')->name('home');
Route::get('profile', 'ClientDashboardController@profile')->name('profile');
Route::get('shopping', 'ClientDashboardController@shopping')->name('shopping');
Route::get('description/{item_id}', 'ClientDashboardController@description')->name('description');

Route::post('item/data', 'ItemController@data')->name('item.data');
Route::resource('item', 'ItemController');

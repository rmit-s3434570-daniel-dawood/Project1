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
    return view('welcome');
})->name('welcome');
Auth::routes();

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('vehicles', function () {
    return view('vehicles');
})->name('vehicles');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('thankyou', function () {
 return view('booking.thankyou');
})->name('thankyou');

Route::get('create', function () {
 return view('booking.create');
})->name('booking');

Route::get('locations', function () {
    return view('locations');
})->name('locations');


Route::resource('car', 'CarController');
Route::resource('booking', 'BookingController'); 

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

Auth::routes();

Route::get('booking/history', 'BookingController@history');

Route::resource('car', 'CarController');

Route::resource('booking', 'BookingController'); 

Route::post('booking/{id}', 'BookingController@update');

//Route::get('thankyou', function () {
// return view('booking.thankyou');
//})->name('thankyou');



//Main Pages

Route::get('/', 'PagesController@welcome');

Route::get('welcome', 'PagesController@welcome');

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::get('vehicles', 'PagesController@vehicles');

Route::get('locations', 'PagesController@locations');

Route::get('home', 'HomeController@index');


//Footer pages

Route::get('faq', 'PagesController@faq');
Route::get('privacy', 'PagesController@privacy');
Route::get('terms', 'PagesController@terms');
Route::get('refund', 'PagesController@refund');


//Other Pages
//Route::get('create', 'BookingController@create');


//Vehicles Pages
Route::get('v1', 'VehiclesController@v1');
Route::get('v2', 'VehiclesController@v2');
Route::get('v3', 'VehiclesController@v3');
Route::get('v4', 'VehiclesController@v4');
Route::get('v5', 'VehiclesController@v5');
Route::get('v6', 'VehiclesController@v6');

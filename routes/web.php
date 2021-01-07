<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/','WelcomeController@index');
Route::get('/about','WelcomeController@about');
Route::get('/contact','WelcomeController@contact');
Route::post('/contact','WelcomeController@store_contact');
Route::get('/privacy-policy','WelcomeController@privacy_policy');
Route::get('/term-condition','WelcomeController@term_condition');


Route::get('/flight-search','WelcomeController@flight_search');
Route::post('/flight-book','HomeController@flight_book');



Auth::routes();


//profile
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/my-flight', 'HomeController@my_flight');


//admin
Route::get('/admin/login', 'Auth\AdminLoginController@login_form');
Route::post('/admin/login', 'Auth\AdminLoginController@login');
Route::get('/admin/dashboard', 'AdminController@dashboard');

//admin profile
Route::get('/admin/profile', 'AdminController@profile');

//admin users
Route::get('/admin/users', 'UsersController@users');
Route::get('admin/user/verify/{id}', 'UsersController@user_verify');
Route::get('admin/user/details/{id}', 'UsersController@user_details');
Route::get('admin/user/delete/{id}', 'UsersController@user_delete');


//admin contacts
Route::get('/admin/contacts', 'ContactController@contacts');
Route::get('admin/contact/details/{id}', 'ContactController@contact_details');
Route::get('admin/contact/delete/{id}', 'ContactController@contact_delete');


//flight type
Route::get('/admin/flight-type', 'FlighttypeController@flight_type');
Route::get('/admin/add-flight-type', 'FlighttypeController@add_flight_type');
Route::post('/admin/add-flight-type', 'FlighttypeController@store_flight_type');
Route::get('admin/flight-type/delete/{id}', 'FlighttypeController@delete');


//flight
Route::get('/admin/flight-list', 'FlightController@flight');
Route::get('admin/add-flight', 'FlightController@add_flight');
Route::get('/admin/flight-seat-edit/{id}', 'FlightController@edit_flight');
Route::post('/admin/edit-flight', 'FlightController@update_flight');
Route::post('admin/add-flight', 'FlightController@store_flight');
Route::get('admin/flight-delete/{id}', 'FlightController@delete_flight');


//pending book flight
Route::get('/admin/{pending}-book-flight', 'FlightController@book_flight');
Route::get('/admin/{booked}-book-flight', 'FlightController@book_flight');
Route::get('/admin/flight-book-status/{id}', 'FlightController@book_flight_status');
Route::get('/admin/flight-book-details/{id}', 'FlightController@book_flight_details');
Route::get('admin/flight-book-delete/{id}', 'FlightController@book_flight_delete');








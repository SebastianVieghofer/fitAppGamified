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

// Route::get('/', function () {
//     return view('welcome');
// });

//Auth::routes();

//Route::get('/', 'HomeController@index')->name('profile');
Auth::routes(['verify' => true]);

//return views
Route::get('/settings', function () {return view('settings');})->name('settings');

//Create

//Read
Route::get('/', 'ReadController@selectRandomWorkout')->middleware('auth')->name('workout');

//Update
Route::post('/updateUser', 'UpdateController@updateUser')->middleware('auth')->name('updateUser');

//Delete





// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

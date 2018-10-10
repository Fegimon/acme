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

Route::group(['middleware' => ['web']], function () {
	// here you should put your routes
    Route::post('login','RegisterController@login');
    Route::post('register','RegisterController@register');
});


Route::get('/','HomeController@home');
Route::get('register','HomeController@register');


Route::get('staff/dashboard','HomeController@staffdashboard');
Route::get('admin/dashboard','HomeController@admindashboard');



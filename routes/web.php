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





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'Auth\AdminController@showLoginForm')->name('login');
Route::post('/login', 'Auth\AdminController@login')->name('login.submit');
Route::get('staff/dashboard','HomeController@staffdashboard');


Route::group(['prefix' => 'admin'], function(){
Route::get('dashboard','HomeController@admindashboard');
Route::get('staffdetails','HomeController@staffdetails');
Route::get('studentdetails','HomeController@studentdetails');
Route::get('createstaff','HomeController@createstaff');
Route::get('createstudent','HomeController@createstudent');


});



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
Route::post('addstaff','AdmissionController@addstaff');
Route::post('addstudent','AdmissionController@addstudent');
Route::get('editstudent/{id}','HomeController@editstudent');
Route::get('deletestudent/{id}','HomeController@deletestudent');
Route::get('viewstudent/{id}','HomeController@viewstudent');

Route::get('deletecourse/{id}','HomeController@deletecourse');
Route::get('editcourse/{id}','HomeController@editcourse');
Route::get('viewcourse/{id}','HomeController@viewcourse');
Route::get('addcourse','HomeController@addcourse');
Route::post('addcourse','CourseController@addcourse');
Route::get('courselist','HomeController@courselist');

Route::get('addenquiry','HomeController@addenquiry');
Route::get('enquirylist','HomeController@enquirylist');
Route::post('addenquiry','AdmissionController@addenquiry');
Route::get('viewenquiry/{id}','HomeController@viewenquiry');
Route::get('editenquiry/{id}','HomeController@editenquiry');
Route::get('deleteenquiry/{id}','HomeController@deleteenquiry');

Route::get( 'payment','HomeController@payment');
Route::post( 'payment','PaymentController@payment');
Route::get( 'paymentlist','HomeController@paymentlist');
Route::get( 'viewpayment/{id}','HomeController@viewpayment');
Route::get( 'editpayment/{id}','HomeController@editpayment');
Route::get( 'deletepayment/{id}','HomeController@deletepayment');


Route::post( 'payexpense','HomeController@payexpense');

Route::get( 'payexpense','HomeController@payexpense');










});



<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminController;
//use App\Http\Controllers\CarrierController;
use App\Http\Controllers\Carrier\CarrierController;
use App\Http\Controllers\Carrier\FronttruckController;
use App\Http\Controllers\UserController;
use App\Models\Truck;


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


//echo url()->full();
//echo url()->previous();
//$current_url = request()->segment(count(request()->segments(1)));

//$current_url = last(request()->segments(1));

// Added extra url for admin if type only admin in a url
Route::match(['get','post'],'admin', [AdminController::class, 'login'])->name('admin');

//Front page route
Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\Front\FrontController::class, 'about'])->name('about');
Route::get('/terms-conditions', [App\Http\Controllers\Front\FrontController::class, 'termsConditions'])->name('terms.conditions');
Route::match(['get','post'],'/contact-us', [App\Http\Controllers\Front\FrontController::class, 'contact'])->name('contact');
Route::get('/get-quote', [App\Http\Controllers\Front\FrontController::class, 'quote'])->name('quote');
Route::match(['get','post'],'/get-quote-form', [App\Http\Controllers\Front\FrontController::class, 'getquoteForm'])->name('dropzone');

Route::get('truck-view/{id?}', [App\Http\Controllers\Carrier\FronttruckController::class, 'truckView'])->name('tuck.view');
Route::get('truck', [App\Http\Controllers\Carrier\FronttruckController::class, 'truckList'])->name('tuck.list');


 Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function(){
	Route::match(['get','post'],'register', [AdminController::class, 'register'])->name('admin.register');
	Route::match(['get','post'],'login', [AdminController::class, 'login'])->name('admin.login');
	Route::match(['get','post'],'password-reset', [AdminController::class, 'passwordReset'])->name('admin.password.reset');
	Route::match(['get','post'],'password-reset-link', [AdminController::class, 'passwordResetLink'])->name('admin.password.link');
	Route::match(['get','post'],'confirm/{code}', [AdminController::class, 'confirmEmail'])->name('admin.confirm.email');
		
	
	Route::group(['middleware' => 'Admin'], function(){
		Route::Match(['get','post'],'dashboard', 'AdminController@admindashboard');
		Route::Match(['get','post'],'logout', 'AdminController@adminLogout')->name('admin.logout');
		Route::Match(['get','post'],'profile', 'AdminController@adminProfile')->name('admin.profile');
		Route::Match(['get','post'],'password-update', 'AdminController@adminPassword')->name('admin.password');
		Route::Match(['get','post'],'user-list', 'AdminController@usersList')->name('user.list');
		Route::Match(['get','post'],'carrier-update/{id?}', 'AdminController@carrierUpdate')->name('carrier.update');
		Route::Match(['get','post'],'carrier-delete/{id?}', 'AdminController@carrierDelete')->name('carrier.delete');
		Route::Match(['get','post'],'user-update/{id?}', 'AdminController@userUpdate')->name('user.update');
		Route::Match(['get','post'],'user-delete/{id?}', 'AdminController@userDelete')->name('user.delete');
		Route::get('truck-list', 'AdminController@truckList')->name('truck.list');
		Route::Match(['get','post'],'truck-view/{id?}', 'AdminController@truckView')->name('truck.view');
		Route::Match(['get','post'],'quote-list', 'AdminController@quoteList')->name('quote.list');
		Route::Match(['get','post'],'quote-status', 'AdminController@quoteStatus')->name('quote.status');
		Route::Match(['get','post'],'quote-view/{id?}', 'AdminController@quoteView')->name('quote.view');
		Route::Match(['get','post'],'forward-carriers', 'AdminController@forwardCarrier')->name('forward.carrier');
		Route::Match(['get','post'],'quote-forward', 'AdminController@quoteForward')->name('quote.forward');
		Route::Match(['get','post'],'assign-carrier', 'AdminController@assignCarrier')->name('assign.carrier');
		Route::Match(['get','post'],'quote-notifications', 'AdminController@quoteNotifications')->name('quote.notifications');
		Route::Match(['get','post'],'support-request', 'AdminController@supportRequest')->name('admin.support.request');
	});
	
});


 Route::group(['namespace' => 'App\Http\Controllers\Carrier', 'prefix' => 'carrier'], function(){
	Route::match(['get','post'],'register', [CarrierController::class, 'register'])->name('carrier.register');
	Route::match(['get','post'],'login', [CarrierController::class, 'login'])->name('carrier.login');
	Route::match(['get','post'],'carrier-password', [CarrierController::class, 'passwordForget'])->name('carrier.password');
	Route::match(['get','post'],'confirm/{code}', [CarrierController::class, 'confirmEmail'])->name('carrier.confirm.email');
	
	Route::group(['middleware' => 'Carrier'], function(){
		Route::Match(['get','post'],'dashboard', 'CarrierController@carrierdashboard');
		Route::Match(['get','post'],'logout', 'CarrierController@carrierLogout')->name('carrier.logout');
		Route::get('truck', 'CarrierController@truck')->name('carrier.tuck');
		Route::post('add-truck', 'CarrierController@addTruck')->name('add.tuck');
		Route::get('truck-list', 'CarrierController@truckList')->name('tuck.list');
		Route::Match(['get','post'],'truck-edit/{id?}', 'CarrierController@truckEdit')->name('tuck.edit');
		Route::get('truck-delete/{id}', 'CarrierController@truckDelete')->name('tuck.delete');
		Route::match(['get','post'],'profile-update', 'CarrierController@profileUpdate')->name('carrier.profile');
		Route::Match(['get','post'],'quote-notifications', 'CarrierController@quoteNotifications')->name('quote.carrier.notifications');
		Route::Match(['get','post'],'quote-assigned/{id?}', 'CarrierController@quoteAssigned')->name('quote.assigned');
	});
	
});

 Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'user'], function(){
	Route::match(['get','post'],'register', [UserController::class, 'register'])->name('user.register');
	Route::match(['get','post'],'login', [UserController::class, 'login'])->name('login');
	Route::match(['get','post'],'user-password', [UserController::class, 'passwordForget'])->name('user.password');
	Route::match(['get','post'],'confirm/{code}', [UserController::class, 'confirmEmail'])->name('user.confirm.email');
	
	
	Route::group(['middleware' => 'auth'], function(){
		Route::Match(['get','post'],'dashboard', 'UserController@userdashboard');
		Route::Match(['get','post'],'logout', 'UserController@userLogout')->name('user.logout');
		Route::match(['get','post'],'profile-update', 'UserController@profileUpdate')->name('user.profile');
		Route::Match(['get','post'],'quote-list', 'UserController@quoteList')->name('quote.list.user');
		Route::Match(['get','post'],'quote-view/{id?}', 'UserController@quoteView')->name('quote.view.user');
	});
	
});
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

Route::get('/','HomeFilterController@filter');
Route::get('/select-car','HomeFilterController@carModel');
Route::post('/send-mail','HomeFilterController@sendMail');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

/* Backend Routes */
Route::group(['middleware' => ['active_admin']], function () {
    Route::get('admin/dashboard','AdminController@dashboard');
    Route::get('/admin/show-make','DashboardController@showmake'); 
    Route::match(['get', 'post'],'/admin/add-make','DashboardController@addmake'); 
    Route::get('/admin/delete-make/{id}','DashboardController@addDelete');
    Route::match(['get', 'post'], '/admin/edit-make','DashboardController@addEdit'); 
    Route::match(['get', 'post'],' /admin/add-model','DashboardController@addModel');
    Route::get('admin/show-model','DashboardController@showModel');
    Route::post('/admin/edit-model','DashboardController@editModel'); 
    Route::get('/admin/delete-model/{id}','DashboardController@deleteModel');
    Route::match(['get','post'],'/admin/add-fuel','DashboardController@addFuel');
    Route::get('/admin/delete-fuel/{id}','DashboardController@deleteFuel');
    Route::match(['get','post'],'/admin/battery-company','DashboardController@batteryCompany');
    Route::get('/admin/delete-batteryCompany/{id}','DashboardController@deleteBatteryCompany');
    Route::match(['get', 'post'], '/admin/battery-product','DashboardController@addBatteryProduct'); 
    Route::post('/admin/add-battery','BatteryListController@addBattery');
});
Route::match(['get', 'post'],'/logout','AdminController@logout');
Route::post('admin/verify','AdminController@otpVerify');
Route::match(['get', 'post'], '/admin', 'AdminController@login');
Route::get('/{loc}/{make}/{model}/{petrol}','BatteryPageController@showProduct');


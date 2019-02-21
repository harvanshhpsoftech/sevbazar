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
});

Route::get('/admin','AdminController@login');
Route::get('/Dashboard','AdminController@Dashboard');
Route::match(['get','post'],'/Product','AdminController@Product');
Route::match(['get','post'],'/EditProduct/{id}','AdminController@EditProduct');

Route::match(['get','post'],'/DeleteProduct/{id}','AdminController@DeleteProduct');

Route::post('/UpdateProduct','AdminController@UpdateProduct');

Route::get('/ManageProduct','AdminController@ManageProduct');
Route::get('/ManageOrder','AdminController@ManageOrder');
Route::get('/ManageSale','AdminController@ManageSale');
Route::get('/ManageReturn','AdminController@ManageReturn');
Route::get('/ManagePayment','AdminController@ManagePayment');
Route::get('/ManageOffers','AdminController@ManageOffers');
Route::get('/AddOffers','AdminController@AddOffers');
Route::post('/ProductCreate','AdminController@ProductCreate');

Route::match(['get','post'],'/Brand','AdminController@Brand');
Route::get('/ManageBrand','AdminController@ManageBrand');


Route::match(['get','post'],'/Region','AdminController@Region');
Route::get('/ManageRegion','AdminController@ManageRegion');


Route::match(['get','post'],'/Category','AdminController@Category');
Route::get('/ManageCategory','AdminController@ManageCategory');

Route::match(['get','post'],'/CreateVendor','AdminController@CreateVendor');
Route::get('/ManageVendor','AdminController@ManageVendor');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* vender */
Route::get('/vender','VenderController@login');
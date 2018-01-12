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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/user', function () {
    return view('user.index');
});
Route::get('/user/shop', function () {
    return view('user.shop.show');
});
Route::get('/user/shop/create', function () {
    return view('user.shop.create');
});

// User Routes
Route::group(['namespace' => 'User'], function(){
	Route::resource('user/shop/items', 'ProductController');
	Route::resource('user/shop/categories', 'CategoryController');
	Route::resource('user/shop/brands', 'BrandController');
	Route::resource('user/shop/suppliers', 'SupplierController');
	Route::resource('user/shop/invoices', 'InvoiceController');
});

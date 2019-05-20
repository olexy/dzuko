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

Route::get('/home', 'HomeController@index')->name('home');

// PRODUCT MODEL ROUTES
Route::resource('products', 'ProductsController');
Route::post('/product/update', 'ProductsController@updater')->name('product.updater');

// Route::get('product/delete/{id}', 'ProductsController@destroyer');

//STORE FRONT ROUTES
Route::get('/', 'ShopFrontController@index' )->name('store.front');
Route::resource('shop', 'ShopFrontController');



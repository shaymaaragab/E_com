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


Route::get('/','FrontController@index')->name('home');
Route::get('/shirts','FrontController@shirts')->name('shirts');
Route::get('/shirt','FrontController@shirt')->name('shirt');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItems')->name('cart.addItem');

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
   Route::get('/',function(){
     return view('admin.index');
   })->name('admin.index');
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');
    Route::resource('address', 'AddressController');
});
Route::get('checkout', 'CheckoutController@step1');
Route::get('shipping-info', 'CheckoutController@shipping')->name('checkout.shipping');

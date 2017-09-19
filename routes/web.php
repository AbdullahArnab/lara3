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



Route::get('/contact-us', function () {
    return view('contact-us');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
Route::get('/view-profile', 'ProfileController@index');
Route::get('/', 'PageController@index')->name('home');
Route::get('/product-details/{var1}', 'PageController@productDetails');
Route::get('/about-us', 'PageController@aboutUs');
Route::get('/contact-us', 'PageController@contactUS');
Route::get('/categories', 'PageController@categories')->name('categories');
Route::get('/categories/{var1}', 'PageController@categoryDetails')->name('products');
Route::get('/addToCart/{id}', 'CartController@addToCart');
Route::get('/mycart', 'CartController@cart');
Route::get('/mycart', 'CartController@mycart');
Route::post('/addToCart', 'CartController@postaddToCart');
Route::post('/cartItemDelete','CartController@cartItemDelete');

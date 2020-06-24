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

Route::get('/', 'pages@show')->name('index');
Route::get('/login', 'pages@show')->name('login');
Route::post('/login/processLogin', 'pages@checkLogin')->name('checkLogin');

//Route::get('parts.indexMain', 'pages@getAllVideos');


Route::get('/logout', 'pages@logout')->name('logout');

Route::get('/add-to-cart/{id}', 'ProductsController@addToCart');
Route::get('/remove-from-cart/{id}', 'ProductsController@removeFromCart');
Route::get('/order', 'ProductsController@orderVideos')->name('order');

Route::get('/{slug_one}/{slug_two}', 'pages@singleVideo');
Route::get('/{slug_one}', 'pages@handlePages');
Route::get('/cart', 'pages@handlePages')->name('cart');
Route::get('/userPanel', 'pages@handlePages')->name('userPanel');

Route::get('/addVideo', 'ProductsController@handlePages')->name('addVideo');
Route::get('/removeVideo', 'ProductsController@handlePages')->name('removeVideo');

Route::post('/processAdding', 'ProductsController@addVideo')->name('processAdding');
Route::post('/processDelete', 'ProductsController@removeVideo')->name('processDelete');

Route::get('/register', 'pages@handlePages')->name('register');
Route::post('/register', 'registerController@storeUser');


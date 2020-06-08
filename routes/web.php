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

Route::get('/{slug_one}/{slug_two}', 'pages@singleVideo');
Route::get('/{slug_one}', 'pages@handlePages');

Route::get('/cart', 'pages@handlePages')->name('cart');
Route::get('/userPanel', 'pages@handlePages')->name('userPanel');

Route::group(array ('before' => 'auth'), function() {
    Route::get('/login/logout', 'pages@logout');
});
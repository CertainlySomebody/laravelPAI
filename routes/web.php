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
Route::post('/login/processLogin', 'pages@checkLogin');
Route::get('/login/successlogin', 'pages@successLogin');
Route::get('/login/logout', 'pages@logout');

// route to single video

// route to specified category with videos

Route::get('/cart', function() {
    return view('cart');
})->name('cart');

//Route::get('parts.indexMain', 'pages@getAllVideos');

Route::get('/{category_slug}/{name}', 'pages@singleVideo');
Route::get('/{category_slug}', 'pages@categoryView');
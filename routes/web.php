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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'frontend');
Route::get('about', 'frontend@about');
Route::get('cart', 'frontend@cart');
Route::get('checkout', 'frontend@checkout');
Route::get('shop', 'frontend@shop');
Route::get('contact', 'frontend@contact');
Route::get('suplement', 'frontend@suplement');
Route::get('kapsul', 'frontend@kapsul');



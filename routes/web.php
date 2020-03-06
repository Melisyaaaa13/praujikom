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

Route::get('/login', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('/', 'frontend');
Route::get('about', 'frontend@about');
Route::get('cart', 'frontend@cart');
Route::get('checkout', 'frontend@checkout');
Route::get('shop', 'FrontendController@shop');
Route::get('shop_single', 'frontend@shop_single');
Route::get('contact', 'frontend@contact');
Route::get('show', 'FrontendController@show');
Route::get('shop_single/{slug}', 'FrontendController@show');
Route::get('suplement', 'frontend@suplement');
Route::get('kapsul', 'frontend@kapsul');
Route::get('menjagamata', 'frontend@menjagamata');
Route::get('/', 'FrontendController@index');


Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function(){
    Route::resource('/index','backendController');
    Route::resource('/kategori','kategoriController');
        Route::resource('/tag','TagController');
        Route::resource('/artikel','artikelController');
        Route::resource('/suplemen','suplemenController');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

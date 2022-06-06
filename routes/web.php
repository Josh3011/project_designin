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

Auth::routes();

//Route Dahboard
Route::get('/home', 'HomeController@index')->name('home');

//Route Detail Jasa by Josha
Route::get('/listjasa2','DetailjasaController@index');
Route::get('/listjasa2/cari','DetailjasaController@cari');
Route::get('/detail_jasa/{id}','DetailjasaController@view')->name('detailjasa');

//order
Route::get('order', function () {
    return view('order');
});

Route::post('order', 'OrderController@storeaddons');

Route::get('visa', function () {
    return view('visa');
});
Route::get('gopay', function () {
    return view('gopay');
});
Route::get('detail_jasa', function () {
    return view('detail_jasa');
});
Route::get('metode_pembayaran', function () {
    return view('metode_pembayaran');
});
Route::get('akun_pengguna', function(){
    return view('akunpengguna');
});
Route::get('shoppingcart', function () {
    return view('shoppingcart');
});

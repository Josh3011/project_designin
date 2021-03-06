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

use Illuminate\Support\Facades\Route;

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

Route::get('/akunpengguna', function () {
    return view('akunpengguna');
});
//order
Route::get('order', function () {
    return view('order');
});
Route::get('visa', function () {
    return view('visa');
});
Route::get('gopay', function () {
    return view('gopay');
});
Route::get('detail_jasa', function () {
    return view('detail_jasa');
});

Route::get('akun_pengguna', function(){
    return view('akunpengguna');
});



Route::get('shoppingcart', function () {
    return view('shoppingcart');
});
Route::get('login1', function () {
    return view('login1');
});
Route::get('register1', function () {
    return view('register1');
});


Route::get('order/{id}', 'OrderController@index')->name('order');
// Route::get('order/{idBarang}/{idOrder}', 'OrderController@Detail')->name('orderDetail');
Route::post('order/{id}', 'OrderController@storeaddons');
Route::get('metode_pembayaran/{id}/{idOrder}', 'OrderController@metode_pembayaran')->name('metode_pembayaran');
Route::post('metode_pembayaran/{id}/{idOrder}', 'OrderController@storeOrder')->name('storeOrder');

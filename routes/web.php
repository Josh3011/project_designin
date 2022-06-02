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

Route::get('/home', 'HomeController@index')->name('home');

//Route Detail Jasa by Josha
Route::get('/listjasa2','DetailjasaController@index');
Route::get('/listjasa2/cari','DetailjasaController@cari');
Route::get('/detail_jasa/{id}','DetailjasaController@view');

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



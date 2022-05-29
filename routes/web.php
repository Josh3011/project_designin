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

<<<<<<< HEAD
//Route Detail Jasa
Route::get('listjasa1', function () {
=======
//Route List Jasa
Route::get('listjasa', function () {
>>>>>>> e5b53a066a0a0673f194e42f9c5e01d9e9a86f6a
    return view('daftarjasa.listjasa1');
});
Route::get('listjasa2', function () {
    return view('daftarjasa.listjasa2');
});
Route::get('listjasa3', function () {
    return view('daftarjasa.listjasa3');
});



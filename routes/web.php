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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('home', function (){
   return view('blank');
});

//Obat
Route::get('master/obat', 'Master\ObatController@index');

//Apoteker
Route::get('master/user', 'Master\UserController@index');

//Kategori
Route::get('master/kategori', 'Master\KategoriController@index');

//Transaksi
Route::get('transaksi', 'TransaksiController@index');

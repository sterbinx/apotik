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



Route::get("/",function(){
 return redirect('master/obat');
});
//Obat
Route::get('master/obat', 'Master\ObatController@index');
Route::get('select/category', 'Master\KategoriController@selectCategory');

//Apoteker
Route::get('master/user', 'Master\UserController@index');

//Kategori
Route::get('master/kategori', 'Master\KategoriController@index');
Route::get('master/kategori/create', 'Master\KategoriController@viewCreate');
Route::post('master/kategori/create/process', 'Master\KategoriController@store');
Route::get('master/kategori/search', 'Master\KategoriController@search');

//Transaksi
Route::get('transaksi', 'TransaksiController@index');

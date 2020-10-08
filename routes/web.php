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
Route::get('master/obat/create', 'Master\ObatController@viewCreate');
Route::get('master/obat/create/process', 'Master\ObatController@store');
Route::get('master/obat/update/{id}', 'Master\ObatController@viewEdit');
Route::post('master/obat/update/process', 'Master\ObatController@update');
Route::get('master/obat/delete/{id}', 'Master\ObatController@delete');
Route::get('master/obat/search', 'Master\ObatController@search');

Route::get('select/category', 'Master\KategoriController@selectCategory');

//Apoteker
Route::get('master/user', 'Master\UserController@index');

//Kategori
Route::get('master/kategori', 'Master\KategoriController@search');
Route::get('master/kategori/create', 'Master\KategoriController@viewCreate');

Route::get('master/kategori/get','Master\KategoriController@get_ket');
Route::get('master/kategori/update/{id}','Master\KategoriController@viewUpdate');
Route::post('master/kategori/update/process', 'Master\KategoriController@update_ket');

Route::post('master/kategori/create/process', 'Master\KategoriController@store');
Route::get('master/kategori/search', 'Master\KategoriController@search');


Route::get('master/kategori/delete/{id}','Master\KategoriController@delete');
Route::get('master/kategori/delete/{id}}', 'Master\KategoriController@destroy');

//Transaksi
Route::get('transaksi', 'TransaksiController@index');

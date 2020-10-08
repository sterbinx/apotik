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
 return redirect('login');
});

//login
Route::get('login','AdminController@index');
Route::post('post-login','AdminController@post_login')->name('post_login');
Route::get('logout','AdminController@logout');
//Obat
Route::get('master/obat', 'Master\ObatController@index');
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

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

Route::get('/beranda', 'HomeController@index')->name('beranda');


Route::get('/tipe', 'TipeController@index')->name('tipe.index');
Route::get('/tipe/tambah-data', 'TipeController@create')->name('tipe.create');
Route::post('/tipe/tambah-data', 'TipeController@store')->name('tipe.store');
Route::get('/tipe/{tipe}/ubah-data', 'TipeController@edit')->name('tipe.edit');
Route::patch('/tipe/{tipe}/ubah-data', 'TipeController@update')->name('tipe.update');
Route::delete('/tipe/{tipe}/hapus', 'TipeController@destroy')->name('tipe.destroy');


Route::get('/kondisi', 'KondisiController@index')->name('kondisi.index');
Route::get('/kondisi/tambah-data', 'KondisiController@create')->name('kondisi.create');
Route::post('/kondisi/tambah-data', 'KondisiController@store')->name('kondisi.store');
Route::get('/kondisi/{kondisi}/ubah-data', 'KondisiController@edit')->name('kondisi.edit');
Route::patch('/kondisi/{kondisi}/ubah-data', 'KondisiController@update')->name('kondisi.update');
Route::delete('/kondisi/{kondisi}/hapus', 'KondisiController@destroy')->name('kondisi.destroy');


Route::get('/kategori-suku-cadang', 'KategorisukucadangController@index')->name('kategorisukucadang.index');
Route::get('/kategori-suku-cadang/tambah-data', 'KategorisukucadangController@create')->name('kategorisukucadang.create');
Route::post('/kategori-suku-cadang/tambah-data', 'KategorisukucadangController@store')->name('kategorisukucadang.store');
Route::get('/kategori-suku-cadang/{kategorisukucadang}/ubah-data', 'KategorisukucadangController@edit')->name('kategorisukucadang.edit');
Route::patch('/kategori-suku-cadang/{kategorisukucadang}/ubah-data', 'KategorisukucadangController@update')->name('kategorisukucadang.update');
Route::delete('/kategori-suku-cadang/{kategorisukucadang}/hapus', 'KategorisukucadangController@destroy')->name('kategorisukucadang.destroy');


Route::get('/suku-cadang', 'SukucadangController@index')->name('sukucadang.index');
Route::get('/suku-cadang/tambah-data', 'SukucadangController@create')->name('sukucadang.create');
Route::post('/suku-cadang/tambah-data', 'SukucadangController@store')->name('sukucadang.store');
Route::get('/suku-cadang/{sukucadang}/ubah-data', 'SukucadangController@edit')->name('sukucadang.edit');
Route::patch('/suku-cadang/{sukucadang}/ubah-data', 'SukucadangController@update')->name('sukucadang.update');
Route::delete('/suku-cadang/{sukucadang}/hapus', 'SukucadangController@destroy')->name('sukucadang.destroy');


Route::get('/kulkas', 'KulkasController@index')->name('kulkas.index');
Route::get('/kulkas/tambah-data', 'KulkasController@create')->name('kulkas.create');
Route::post('/kulkas/tambah-data', 'KulkasController@store')->name('kulkas.store');
Route::get('/kulkas/{kulkas}/ubah-data', 'KulkasController@edit')->name('kulkas.edit');
Route::patch('/kulkas/{kulkas}/ubah-data', 'KulkasController@update')->name('kulkas.update');
Route::delete('/kulkas/{kulkas}/hapus', 'KulkasController@destroy')->name('kulkas.destroy');


Route::get('/karyawan', 'KaryawanController@index')->name('karyawan.index');
Route::get('/karyawan/tambah-data', 'KaryawanController@create')->name('karyawan.create');
Route::post('/karyawan/tambah-data', 'KaryawanController@store')->name('karyawan.store');
Route::get('/karyawan/{karyawan}/ubah-data', 'KaryawanController@edit')->name('karyawan.edit');
Route::patch('/karyawan/{karyawan}/ubah-data', 'KaryawanController@update')->name('karyawan.update');
Route::delete('/karyawan/{karyawan}/hapus', 'KaryawanController@destroy')->name('karyawan.destroy');
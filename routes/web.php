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
Route::get('/suku-cadang/download', 'SukucadangController@laporan')->name('sukucadang.laporan');


Route::get('/kulkas', 'KulkasController@index')->name('kulkas.index');
Route::get('/kulkas/tambah-data', 'KulkasController@create')->name('kulkas.create');
Route::post('/kulkas/tambah-data', 'KulkasController@store')->name('kulkas.store');
Route::get('/kulkas/{kulkas}/ubah-data', 'KulkasController@edit')->name('kulkas.edit');
Route::patch('/kulkas/{kulkas}/ubah-data', 'KulkasController@update')->name('kulkas.update');
Route::get('/kulkas/download', 'KulkasController@laporan')->name('kulkas.laporan');
Route::delete('/kulkas/{kulkas}/hapus', 'KulkasController@destroy')->name('kulkas.destroy');


// Route::get('/karyawan', 'KaryawanController@index')->name('karyawan.index');
// Route::get('/karyawan/tambah-data', 'KaryawanController@create')->name('karyawan.create');
// Route::post('/karyawan/tambah-data', 'KaryawanController@store')->name('karyawan.store');
// Route::get('/karyawan/{karyawan}/ubah-data', 'KaryawanController@edit')->name('karyawan.edit');
// Route::patch('/karyawan/{karyawan}/ubah-data', 'KaryawanController@update')->name('karyawan.update');
// Route::delete('/karyawan/{karyawan}/hapus', 'KaryawanController@destroy')->name('karyawan.destroy');


Route::get('/teknisi', 'TeknisiController@index')->name('teknisi.index');
Route::get('/teknisi/tambah-data', 'TeknisiController@create')->name('teknisi.create');
Route::post('/teknisi/tambah-data', 'TeknisiController@store')->name('teknisi.store');
Route::get('/teknisi/{teknisi}/ubah-data', 'TeknisiController@edit')->name('teknisi.edit');
Route::patch('/teknisi/{teknisi}/ubah-data', 'TeknisiController@update')->name('teknisi.update');
Route::delete('/teknisi/{teknisi}/hapus', 'TeknisiController@destroy')->name('teknisi.destroy');
Route::get('/teknisi/download', 'TeknisiController@laporan')->name('teknisi.laporan');

Route::get('/tipe-pekerjaan', 'TipepekerjaanController@index')->name('tipepekerjaan.index');
Route::get('/tipe-pekerjaan/tambah-data', 'TipepekerjaanController@create')->name('tipepekerjaan.create');
Route::post('/tipe-pekerjaan/tambah-data', 'TipepekerjaanController@store')->name('tipepekerjaan.store');
Route::get('/tipe-pekerjaan/{tipepekerjaan}/ubah-data', 'TipepekerjaanController@edit')->name('tipepekerjaan.edit');
Route::patch('/tipe-pekerjaan/{tipepekerjaan}/ubah-data', 'TipepekerjaanController@update')->name('tipepekerjaan.update');
Route::delete('/tipe-pekerjaan/{tipepekerjaan}/hapus', 'TipepekerjaanController@destroy')->name('tipepekerjaan.destroy');


Route::get('/jenis-masalah', 'JenismasalahController@index')->name('jenismasalah.index');
Route::get('/jenis-masalah/tambah-data', 'JenismasalahController@create')->name('jenismasalah.create');
Route::post('/jenis-masalah/tambah-data', 'JenismasalahController@store')->name('jenismasalah.store');
Route::get('/jenis-masalah/{jenismasalah}/ubah-data', 'JenismasalahController@edit')->name('jenismasalah.edit');
Route::patch('/jenis-masalah/{jenismasalah}/ubah-data', 'JenismasalahController@update')->name('jenismasalah.update');
Route::delete('/jenis-masalah/{jenismasalah}/hapus', 'JenismasalahController@destroy')->name('jenismasalah.destroy');

Route::get('/tambah-data-perbaikan', 'PerbaikanController@create')->name('perbaikan.create');
Route::post('/tambah-data-perbaikan', 'PerbaikanController@store')->name('perbaikan.store');
Route::get('/perbaikan', 'PerbaikanController@index')->name('perbaikan.index');
Route::get('/data-perbaikan/{perbaikan}/rincian', 'PerbaikanController@details')->name('perbaikan.details');
Route::get('/data-perbaikan/{perbaikan}/ubah-data', 'PerbaikanController@edit')->name('perbaikan.edit');
Route::patch('/data-perbaikan/{perbaikan}/ubah-data', 'PerbaikanController@update')->name('perbaikan.update');
Route::delete('/data-perbaikan/{perbaikan}/hapus-data', 'PerbaikanController@destroy')->name('perbaikan.destroy');

Route::get('/tagihan', 'TagihanController@create')->name('tagihan.create');
Route::post('/tagihan', 'TagihanController@store')->name('tagihan.store');
Route::get('/data-tagihan', 'TagihanController@index')->name('tagihan.index');
Route::get('/tagihan/{tagihan}/download', 'TagihanController@laporan')->name('tagihan.laporan');
Route::get('/data-tagihan/{tagihan}/ubah-data', 'TagihanController@edit')->name('tagihan.edit');
Route::patch('/data-tagihan/{tagihan}/ubah-data', 'TagihanController@update')->name('tagihan.update');
Route::delete('/tagihan/{tagihan}/hapus', 'TagihanController@destroy')->name('tagihan.destroy');
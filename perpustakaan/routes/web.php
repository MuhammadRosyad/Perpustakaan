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



Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');

// dashboard
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// data petugas
Route::get('/data-petugas', 'HomeController@datapetugas')->name('datapetugas');
Route::get('/data-petugas/tambah', 'HomeController@tambahdatapetugas')->name('tambahdatapetugas');
Route::post('/data-petugas/tambah', 'HomeController@submittambahdatapetugas')->name('submittambahdatapetugas');
Route::get('/data-petugas/{Id}/edit', 'HomeController@editdatapetugas')->name('editdatapetugas');
Route::post('/data-petugas/{Id}/edit', 'HomeController@submiteditdatapetugas')->name('submiteditdatapetugas');
Route::GET('/data-petugas/{Id}/hapus', 'HomeController@hapusdatapetugas')->name('hapusdatapetugas');

// data mahasiswa
Route::get('/data-mahasiswa', 'HomeController@datamahasiswa')->name('datamahasiswa');
Route::get('/data-mahasiswa/tambah', 'HomeController@tambahdatamahasiswa')->name('tambahdatamahasiswa');
Route::post('/data-mahasiswa/tambah', 'HomeController@submittambahdatamahasiswa')->name('submittambahdatamahasiswa');
Route::get('/data-mahasiswa/{Id}/edit', 'HomeController@editdatamahasiswa')->name('editdatamahasiswa');
Route::post('/data-mahasiswa/{Id}/edit', 'HomeController@submiteditdatamahasiswa')->name('submiteditdatamahasiswa');
Route::GET('/data-mahasiswa/{Id}/hapus', 'HomeController@hapusdatamahasiswa')->name('hapusdatamahasiswa');

// data buku
Route::get('/data-buku', 'HomeController@databuku')->name('databuku');
Route::get('/data-buku/tambah', 'HomeController@tambahdatabuku')->name('tambahdatabuku');
Route::post('/data-buku/tambah', 'HomeController@submittambahdatabuku')->name('submittambahdatabuku');
Route::get('/data-buku/{Id}/edit', 'HomeController@editdatabuku')->name('editdatabuku');
Route::post('/data-buku/{Id}/edit', 'HomeController@submiteditdatabuku')->name('submiteditdatabuku');
Route::GET('/data-buku/{Id}/hapus', 'HomeController@hapusdatabuku')->name('hapusdatabuku');

// data supplier
Route::get('/data-supplier', 'HomeController@datasupplier')->name('datasupplier');
Route::get('/data-supplier/tambah', 'HomeController@tambahdatasupplier')->name('tambahdatasupplier');
Route::post('/data-supplier/tambah', 'HomeController@submittambahdatasupplier')->name('submittambahdatasupplier');
Route::get('/data-supplier/{Id}/edit', 'HomeController@editdatasupplier')->name('editdatasupplier');
Route::post('/data-supplier/{Id}/edit', 'HomeController@submiteditdatasupplier')->name('submiteditdatasupplier');
Route::GET('/data-supplier/{Id}/hapus', 'HomeController@hapusdatasupplier')->name('hapusdatasupplier');
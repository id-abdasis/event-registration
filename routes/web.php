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

Route::group(['prefix' => 'peserta'], function () {
    Route::get('daftar-peserta', 'PesertaController@daftarPeserta')->name('peserta.daftar-peserta');
});

Route::get('pendaftaran-peserta-festival', 'PesertaController@pendaftaranPeserta')->name('pendaftaran-peserta');
Route::post('pendaftaran-peserta-festival', 'PesertaController@StorePendaftaranPeserta')->name('store-pendaftaran-peserta');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

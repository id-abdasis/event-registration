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
    return redirect()->route('pendaftaran-peserta');
});

Route::group(['prefix' => 'peserta'], function () {
    Route::get('daftar-peserta', 'PesertaController@daftarPeserta')->name('peserta.daftar-peserta');
    Route::get('detail-peserta/{id}', 'PesertaController@detailPeserta')->name('peserta.detail-peserta');
});

Route::get('pendaftaran-peserta-festival', 'PesertaController@pendaftaranPeserta')->name('pendaftaran-peserta');
Route::post('pendaftaran-peserta-festival', 'PesertaController@StorePendaftaranPeserta')->name('store-pendaftaran-peserta');
Route::get('dokumentasi-festival-himanura', 'PesertaController@dokumentasiHimanura')->name('dokumentasi-himanura');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

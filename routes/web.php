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
    return view('welcome');
});

// Route
// Route::post('/', 'otentikasi\OtentikasiController@login')->name('login');
// Route::get('/', 'otentikasi\OtentikasiController@index')->name('login');
Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/', 'Auth\LoginController@login')->name('login');

Route::group(['middleware' => ['auth']], function () {
    //crud
    Route::get('/dashboard', function () {
        return view('index');
    });
    Route::get('crud', 'CrudController@index')->name('crud');
    Route::get('crud/tambah', 'CrudController@tambah')->name('cr.t');
    Route::post('crud', 'CrudController@simpan')->name('cr.s');
    Route::delete('crud/{id}', 'CrudController@delete')->name('cr.d');
    Route::get('crud/{id}/edit', 'CrudController@edit')->name('cr.e');
    Route::patch('crud/{id}', 'CrudController@update')->name('cr.u');

    /*------------------ Data Master Aplikasi--------------------------*/
    //Daftar Operator
    Route::get('operator', 'OperatorController@index')->name('operator');
    Route::get('operator/tambah', 'OperatorController@create')->name('op.t');
    Route::post('operator', 'OperatorController@store')->name('op.s');
    Route::delete('operator/{id}', 'OperatorController@delete')->name('op.d');
    Route::get('operator/{id}/edit', 'OperatorController@edit')->name('op.e');
    Route::patch('operator/{id}', 'OperatorController@update')->name('op.u');

    //Daftar Arsip
    Route::get('arsip', 'ArsipController@index')->name('arsip');
    Route::get('arsip/tambah', 'ArsipController@create')->name('arsip.t');
    Route::post('arsip', 'ArsipController@store')->name('arsip.s');
    Route::delete('arsip/{id}', 'ArsipController@destroy')->name('arsip.d');
    Route::get('arsip/{id}/edit', 'ArsipController@edit')->name('arsip.e');
    Route::patch('arsip/{id}', 'ArsipController@update')->name('arsip.u');


    /*------------------ Stock Opname--------------------------*/
    //Stockopname Berkas
    Route::get('op-berkas', 'OpnameberkasController@index')->name('op-berkas');
    Route::get('op-berkas/tambah', 'OpnameberkasController@create')->name('op-berkas.t');
    Route::post('op-berkas', 'OpnameberkasController@store')->name('op-berkas.s');
    Route::delete('op-berkas/{id}', 'OpnameberkasController@destroy')->name('op-berkas.d');
    Route::get('op-berkas/{id}/edit', 'OpnameberkasController@edit')->name('op-berkas.e');
    Route::patch('op-berkas/{id}', 'OpnameberkasController@update')->name('op-berkas.u');

    //Stockopname Buku
    Route::get('op-buku', 'OpnamebukuController@index')->name('op-buku');
    Route::get('op-buku/tambah', 'OpnamebukuController@create')->name('op-buku.t');
    Route::post('op-buku', 'OpnamebukuController@store')->name('op-buku.s');
    Route::delete('op-buku/{id}', 'OpnamebukuController@destroy')->name('op-buku.d');
    Route::get('op-buku/{id}/edit', 'OpnamebukuController@edit')->name('op-buku.e');
    Route::patch('op-buku/{id}', 'OpnamebukuController@update')->name('op-buku.u');

    //Surat Masuk
    Route::get('surat-masuk', 'SuratmasukController@index')->name('surat-masuk');
    Route::get('surat-masuk/tambah', 'SuratmasukController@create')->name('surat-masuk.t');
    Route::post('surat-masuk', 'SuratmasukController@store')->name('surat-masuk.s');
    Route::delete('surat-masuk/{id}', 'SuratmasukController@destroy')->name('surat-masuk.d');
    Route::get('surat-masuk//edit/{id}', 'SuratmasukController@edit')->name('surat-masuk.e');
    Route::patch('surat-masuk/{id}', 'SuratmasukController@update')->name('surat-masuk.u');

    //Surat Keluar
    Route::get('surat-keluar', 'SuratkeluarController@index')->name('surat-keluar');
    Route::get('surat-keluar/tambah', 'SuratkeluarController@create')->name('surat-keluar.t');
    Route::post('surat-keluar', 'SuratkeluarController@store')->name('surat-keluar.s');
    Route::delete('surat-keluar/{id}', 'SuratkeluarController@destroy')->name('surat-keluar.d');
    Route::get('surat-keluar//edit/{id}', 'SuratkeluarController@edit')->name('surat-keluar.e');
    Route::patch('surat-keluar/{id}', 'SuratkeluarController@update')->name('surat-keluar.u');

    //Logout
    Route::get('logout', 'otentikasi\OtentikasiController@logout')->name('logout');
});





Route::get('/home', 'HomeController@index')->name('home');

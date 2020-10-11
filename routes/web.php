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
    Route::get('operator/tambah', 'OperatorController@tambah')->name('op.t');
    Route::post('operator', 'OperatorController@simpan')->name('op.s');
    Route::delete('operator/{id}', 'OperatorController@delete')->name('op.d');
    Route::get('operator/{id}/edit', 'OperatorController@edit')->name('op.e');
    Route::patch('operator/{id}', 'OperatorController@update')->name('op.u');

    //Daftar Kategori Pelayanan
    Route::get('kategori-pelayanan', 'KategoriPelayananController@index')->name('kategori-pelayanan');
    Route::get('kategori-pelayanan/tambah', 'KategoriPelayananController@tambah')->name('kategori-pelayanan.t');
    Route::post('kategori-pelayanan', 'KategoriPelayananController@simpan')->name('kategori-pelayanan.s');
    Route::delete('kategori-pelayanan/{id}', 'KategoriPelayananController@delete')->name('kategori-pelayanan.d');
    Route::get('kategori-pelayanan/{id}/edit', 'KategoriPelayananController@edit')->name('kategori-pelayanan.e');
    Route::patch('kategori-pelayanan/{id}', 'KategoriPelayananController@update')->name('kategori-pelayanan.u');

    /*------------------ Stock Opname--------------------------*/
    //Daftar Arsip
    Route::get('arsip', 'ArsipController@index')->name('arsip');
    Route::get('arsip/tambah', 'ArsipController@create')->name('arsip.t');
    Route::post('arsip', 'ArsipController@store')->name('arsip.s');
    Route::delete('arsip/{id}', 'ArsipController@destroy')->name('arsip.d');
    Route::get('arsip/{id}/edit', 'ArsipController@edit')->name('arsip.e');
    Route::patch('arsip/{id}', 'ArsipController@update')->name('arsip.u');


    //Stockopname Berkas
    Route::get('op-berkas', 'OpBerkasController@index')->name('op-berkas');
    Route::get('op-berkas/tambah', 'OpBerkasController@create')->name('op-berkas.t');
    Route::post('op-berkas', 'OpBerkasController@store')->name('op-berkas.s');
    Route::delete('op-berkas/{id}', 'OpBerkasController@destroy')->name('op-berkas.d');
    Route::get('op-berkas/{id}/edit', 'OpBerkasController@edit')->name('op-berkas.e');
    Route::patch('op-berkas/{id}', 'OpBerkasController@update')->name('op-berkas.u');

    //Stockopname Buku
    Route::get('op-buku', 'OpBerkasController@index')->name('op-buku');
    Route::get('op-buku/tambah', 'OpBerkasController@create')->name('op-berkas.t');
    Route::post('op-buku', 'OpBerkasController@store')->name('op-berkas.s');
    Route::delete('op-buku/{id}', 'OpBerkasController@destroy')->name('op-berkas.d');
    Route::get('op-buku/edit/{id}', 'OpBerkasController@edit')->name('op-berkas.e');
    Route::patch('op-buku/{id}', 'OpBerkasController@update')->name('op-berkas.u');

    /*------------------ peminjaman arsip --------------------------*/
    //peminjaman arsip Berkas
    Route::get('peminjaman-arsip/berkas', 'ArsipController@index')->name('peminjaman-arsip/berkas');
    Route::get('peminjaman-arsip/berkas/tambah', 'ArsipController@create')->name('arsip.t');
    Route::post('peminjaman-arsip/berkas', 'ArsipController@store')->name('arsip.s');
    Route::delete('peminjaman-arsip/berkas/{id}', 'ArsipController@destroy')->name('arsip.d');
    Route::get('peminjaman-arsip/berkas/{id}/edit', 'ArsipController@edit')->name('arsip.e');
    Route::patch('peminjaman-arsip/berkas/{id}', 'ArsipController@update')->name('arsip.u');

    //peminjaman arsip buku
    Route::get('peminjaman-arsip/buku', 'ArsipController@index')->name('peminjaman-arsip/buku');
    Route::get('peminjaman-arsip/buku/tambah', 'ArsipController@create')->name('arsip.t');
    Route::post('peminjaman-arsip/buku', 'ArsipController@store')->name('arsip.s');
    Route::delete('peminjaman-arsip/buku/{id}', 'ArsipController@destroy')->name('arsip.d');
    Route::get('peminjaman-arsip/buku/{id}/edit', 'ArsipController@edit')->name('arsip.e');
    Route::patch('peminjaman-arsip/buku/{id}', 'ArsipController@update')->name('arsip.u');

    /*------------------ pengembalian arsip --------------------------*/
    //pengembalian arsip Berkas
    Route::get('pengembalian-arsip/berkas', 'ArsipController@index')->name('pengembalian-arsip/berkas');
    Route::get('pengembalian-arsip/berkas/tambah', 'ArsipController@create')->name('arsip.t');
    Route::post('pengembalian-arsip/berkas', 'ArsipController@store')->name('arsip.s');
    Route::delete('pengembalian-arsip/berkas/{id}', 'ArsipController@destroy')->name('arsip.d');
    Route::get('pengembalian-arsip/berkas/{id}/edit', 'ArsipController@edit')->name('arsip.e');
    Route::patch('peminjaman-arsip/berkas/{id}', 'ArsipController@update')->name('arsip.u');

    //peminjaman arsip buku
    Route::get('pengembalian-arsip/buku', 'ArsipController@index')->name('pengembalian-arsip/buku');
    Route::get('pengembalian-arsip/buku/tambah', 'ArsipController@create')->name('arsip.t');
    Route::post('pengembalian-arsip/buku', 'ArsipController@store')->name('arsip.s');
    Route::delete('pengembalian-arsip/buku/{id}', 'ArsipController@destroy')->name('arsip.d');
    Route::get('pengembalian-arsip/buku/{id}/edit', 'ArsipController@edit')->name('arsip.e');
    Route::patch('pengembalian-arsip/buku/{id}', 'ArsipController@update')->name('arsip.u');
    //Logout
    Route::get('logout', 'otentikasi\OtentikasiController@logout')->name('logout');
});





Route::get('/home', 'HomeController@index')->name('home');

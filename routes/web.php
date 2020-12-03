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
    Route::get('operator/cari', 'OperatorController@cari')->name('op.c');

    //Daftar Arsip
    Route::get('arsip', 'ArsipController@index')->name('arsip');
    Route::get('arsip/tambah', 'ArsipController@create')->name('arsip.t');
    Route::post('arsip', 'ArsipController@store')->name('arsip.s');
    Route::delete('arsip/{id}', 'ArsipController@destroy')->name('arsip.d');
    Route::get('arsip/{id}/edit', 'ArsipController@edit')->name('arsip.e');
    Route::patch('arsip/{id}', 'ArsipController@update')->name('arsip.u');
    Route::get('arsip/cari', 'ArsipController@cari')->name('arsip.c');
    Route::get('arsip/cetak', 'ArsipController@cetak')->name('arsip.ct');


    /*------------------ Stock Opname--------------------------*/
    //Stockopname Berkas
    Route::get('op-berkas', 'OpnameberkasController@index')->name('op-berkas');
    Route::get('op-berkas/tambah', 'OpnameberkasController@create')->name('op-berkas.t');
    Route::post('op-berkas', 'OpnameberkasController@store')->name('op-berkas.s');
    Route::delete('op-berkas/{id}', 'OpnameberkasController@destroy')->name('op-berkas.d');
    Route::get('op-berkas/{id}/edit', 'OpnameberkasController@edit')->name('op-berkas.e');
    Route::patch('op-berkas/{id}', 'OpnameberkasController@update')->name('op-berkas.u');
    Route::get('op-berkas/cari', 'OpnameberkasController@cari')->name('op-berkas.c');
    Route::get('op-berkas/cetak', 'OpnameberkasController@cetak')->name('op-berkas.ct');

    //Stockopname Buku
    Route::get('op-buku', 'OpnamebukuController@index')->name('op-buku');
    Route::get('op-buku/tambah', 'OpnamebukuController@create')->name('op-buku.t');
    Route::post('op-buku', 'OpnamebukuController@store')->name('op-buku.s');
    Route::delete('op-buku/{id}', 'OpnamebukuController@destroy')->name('op-buku.d');
    Route::get('op-buku/{id}/edit', 'OpnamebukuController@edit')->name('op-buku.e');
    Route::patch('op-buku/{id}', 'OpnamebukuController@update')->name('op-buku.u');
    Route::get('op-buku/cari', 'OpnamebukuController@cari')->name('op-buku.c');
    Route::get('op-buku/cetak', 'OpnamebukuController@cetak')->name('op-buku.ct');


    /*------------------ Peminjaman Arsip--------------------------*/
    //Peminjaman Berkas
    Route::get('peminjaman-berkas', 'PeminjamanberkasController@index')->name('peminjaman-berkas');
    Route::get('peminjaman-berkas/tambah', 'PeminjamanberkasController@create')->name('peminjaman-berkas.t');
    Route::post('peminjaman-berkas', 'PeminjamanberkasController@store')->name('peminjaman-berkas.s');
    Route::delete('peminjaman-berkas/{id}', 'PeminjamanberkasController@destroy')->name('peminjaman-berkas.d');
    Route::get('peminjaman-berkas/{id}/edit', 'PeminjamanberkasController@edit')->name('peminjaman-berkas.e');
    Route::patch('peminjaman-berkas/{id}', 'PeminjamanberkasController@update')->name('peminjaman-berkas.u');
    Route::get('peminjaman-berkas/cari', 'PeminjamanberkasController@cari')->name('peminjaman-berkas.c');
    Route::get('peminjaman-berkas/cetak', 'PeminjamanberkasController@cetak')->name('peminjaman-berkas.ct');

    //Peminjaman Buku
    Route::get('peminjaman-buku', 'PeminjamanbukuController@index')->name('peminjaman-buku');
    Route::get('peminjaman-buku/tambah', 'PeminjamanbukuController@create')->name('peminjaman-buku.t');
    Route::post('peminjaman-buku', 'PeminjamanbukuController@store')->name('peminjaman-buku.s');
    Route::delete('peminjaman-buku/{id}', 'PeminjamanbukuController@destroy')->name('peminjaman-buku.d');
    Route::get('peminjaman-buku/{id}/edit', 'PeminjamanbukuController@edit')->name('peminjaman-buku.e');
    Route::patch('peminjaman-buku/{id}', 'PeminjamanbukuController@update')->name('peminjaman-buku.u');
    Route::get('peminjaman-buku/cari', 'PeminjamanbukuController@cari')->name('peminjaman-buku.c');
    Route::get('peminjaman-buku/cetak', 'PeminjamanbukuController@cetak')->name('peminjaman-buku.ct');


    /*------------------ Pengembalian Arsip--------------------------*/
    //pengembalian Berkas
    Route::get('pengembalian-berkas', 'PengembalianberkasController@index')->name('pengembalian-berkas');
    Route::get('pengembalian-berkas/tambah', 'PengembalianberkasController@create')->name('pengembalian-berkas.t');
    Route::post('pengembalian-berkas', 'PengembalianberkasController@store')->name('pengembalian-berkas.s');
    Route::delete('pengembalian-berkas/{id}', 'PengembalianberkasController@destroy')->name('pengembalian-berkas.d');
    Route::get('pengembalian-berkas/{id}/edit', 'PengembalianberkasController@edit')->name('pengembalian-berkas.e');
    Route::patch('pengembalian-berkas/{id}', 'PengembalianberkasController@update')->name('pengembalian-berkas.u');
    Route::get('pengembalian-berkas/cari', 'PengembalianberkasController@cari')->name('pengembalian-berkas.c');
    Route::get('pengembalian-berkas/cetak', 'PengembalianberkasController@cetak')->name('pengembalian-berkas.ct');

    //pengembalian Buku
    Route::get('pengembalian-buku', 'PengembalianbukuController@index')->name('pengembalian-buku');
    Route::get('pengembalian-buku/tambah', 'PengembalianbukuController@create')->name('pengembalian-buku.t');
    Route::post('pengembalian-buku', 'PengembalianbukuController@store')->name('pengembalian-buku.s');
    Route::delete('pengembalian-buku/{id}', 'PengembalianbukuController@destroy')->name('pengembalian-buku.d');
    Route::get('pengembalian-buku/{id}/edit', 'PengembalianbukuController@edit')->name('pengembalian-buku.e');
    Route::patch('pengembalian-buku/{id}', 'PengembalianbukuController@update')->name('pengembalian-buku.u');
    Route::get('pengembalian-buku/cari', 'PengembalianbukuController@cari')->name('pengembalian-buku.c');
    Route::get('pengembalian-buku/cetak', 'PengembalianbukuController@cetak')->name('pengembalian-buku.ct');

    /////////////////////////////////////////////////////////////////////////////
    //Surat Masuk
    Route::get('surat-masuk', 'SuratmasukController@index')->name('surat-masuk');
    Route::get('surat-masuk/tambah', 'SuratmasukController@create')->name('surat-masuk.t');
    Route::post('surat-masuk', 'SuratmasukController@store')->name('surat-masuk.s');
    Route::delete('surat-masuk/{id}', 'SuratmasukController@destroy')->name('surat-masuk.d');
    Route::get('surat-masuk//edit/{id}', 'SuratmasukController@edit')->name('surat-masuk.e');
    Route::patch('surat-masuk/{id}', 'SuratmasukController@update')->name('surat-masuk.u');
    Route::get('surat-masuk/cari', 'SuratmasukController@cari')->name('surat-masuk.c');
    Route::get('surat-masuk/cetak', 'SuratmasukController@cetak')->name('surat-masuk.ct');

    //Surat Keluar
    Route::get('surat-keluar', 'SuratkeluarController@index')->name('surat-keluar');
    Route::get('surat-keluar/tambah', 'SuratkeluarController@create')->name('surat-keluar.t');
    Route::post('surat-keluar', 'SuratkeluarController@store')->name('surat-keluar.s');
    Route::delete('surat-keluar/{id}', 'SuratkeluarController@destroy')->name('surat-keluar.d');
    Route::get('surat-keluar//edit/{id}', 'SuratkeluarController@edit')->name('surat-keluar.e');
    Route::patch('surat-keluar/{id}', 'SuratkeluarController@update')->name('surat-keluar.u');
    Route::get('surat-keluar/cari', 'SuratkeluarController@cari')->name('surat-keluar.c');
    Route::get('surat-keluar/cetak', 'SuratkeluarController@cetak')->name('surat-keluar.ct');

    //Logout
    Route::get('logout', 'otentikasi\OtentikasiController@logout')->name('logout');
});





Route::get('/home', 'HomeController@index')->name('home');

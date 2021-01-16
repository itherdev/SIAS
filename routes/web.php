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
    // Route::get('crud', 'CrudController@index')->name('crud');
    // Route::get('crud/tambah', 'CrudController@tambah')->name('cr.t');
    // Route::post('crud', 'CrudController@simpan')->name('cr.s');
    // Route::delete('crud/{id}', 'CrudController@delete')->name('cr.d');
    // Route::get('crud/{id}/edit', 'CrudController@edit')->name('cr.e');
    // Route::patch('crud/{id}', 'CrudController@update')->name('cr.u');

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
    Route::get('arsip/{id}/detail', 'ArsipController@show')->name('arsip.v');
    Route::get('arsip/cari', 'ArsipController@cari')->name('arsip.c');
    Route::get('arsip/cetak', 'ArsipController@cetak')->name('arsip.ct');
    //cetak
    Route::get('arsip/print', 'CetakarsipController@pdf')->name('arsip.p');


    /*------------------ Stock Opname--------------------------*/
    //Stockopname Berkas
    Route::get('op-berkas', 'OpnameberkasController@index')->name('op-berkas');
    Route::get('op-berkas/tambah', 'OpnameberkasController@create')->name('op-berkas.t');
    Route::post('op-berkas', 'OpnameberkasController@store')->name('op-berkas.s');
    Route::delete('op-berkas/{id}', 'OpnameberkasController@destroy')->name('op-berkas.d');
    Route::get('op-berkas/{id}/edit', 'OpnameberkasController@edit')->name('op-berkas.e');
    Route::patch('op-berkas/{id}', 'OpnameberkasController@update')->name('op-berkas.u');
    Route::get('op-berkas/{id}/detail', 'OpnameberkasController@show')->name('op-berkas.v');
    Route::get('op-berkas/cari', 'OpnameberkasController@cari')->name('op-berkas.c');
    Route::get('op-berkas/cetak', 'OpnameberkasController@cetak')->name('op-berkas.ct');
    //cetak
    Route::get('op-berkas/print', 'CetakopnameberkasController@pdf')->name('op-berkas.p');


    //Stockopname Buku
    Route::get('op-buku', 'OpnamebukuController@index')->name('op-buku');
    Route::get('op-buku/tambah', 'OpnamebukuController@create')->name('op-buku.t');
    Route::post('op-buku', 'OpnamebukuController@store')->name('op-buku.s');
    Route::delete('op-buku/{id}', 'OpnamebukuController@destroy')->name('op-buku.d');
    Route::get('op-buku/{id}/edit', 'OpnamebukuController@edit')->name('op-buku.e');
    Route::patch('op-buku/{id}', 'OpnamebukuController@update')->name('op-buku.u');
    Route::get('op-buku/{id}/detail', 'OpnamebukuController@show')->name('op-buku.v');
    Route::get('op-buku/cari', 'OpnamebukuController@cari')->name('op-buku.c');
    Route::get('op-buku/cetak', 'OpnamebukuController@cetak')->name('op-buku.ct');
    //cetak
    Route::get('op-buku/print', 'CetakopnamebukuController@pdf')->name('op-buku.p');


    /*------------------ Peminjaman Arsip--------------------------*/
    //Peminjaman Berkas
    Route::get('peminjaman-berkas', 'PeminjamanberkasController@index')->name('peminjaman-berkas');
    Route::get('peminjaman-berkas/tambah', 'PeminjamanberkasController@create')->name('peminjaman-berkas.t');
    Route::post('peminjaman-berkas', 'PeminjamanberkasController@store')->name('peminjaman-berkas.s');
    Route::delete('peminjaman-berkas/{id}', 'PeminjamanberkasController@destroy')->name('peminjaman-berkas.d');
    Route::get('peminjaman-berkas/{id}/edit', 'PeminjamanberkasController@edit')->name('peminjaman-berkas.e');
    Route::patch('peminjaman-berkas/{id}', 'PeminjamanberkasController@update')->name('peminjaman-berkas.u');
    Route::get('peminjaman-berkas/{id}/detail', 'PeminjamanberkasController@show')->name('peminjaman-berkas.v');
    Route::get('peminjaman-berkas/cari', 'PeminjamanberkasController@cari')->name('peminjaman-berkas.c');
    Route::get('peminjaman-berkas/cetak', 'PeminjamanberkasController@cetak')->name('peminjaman-berkas.ct');
    //cetak
    Route::get('peminjaman-berkas/print', 'CetakpeminjamanberkasController@pdf')->name('peminjaman-berkas.p');

    //Peminjaman Buku
    Route::get('peminjaman-buku', 'PeminjamanbukuController@index')->name('peminjaman-buku');
    Route::get('peminjaman-buku/tambah', 'PeminjamanbukuController@create')->name('peminjaman-buku.t');
    Route::post('peminjaman-buku', 'PeminjamanbukuController@store')->name('peminjaman-buku.s');
    Route::delete('peminjaman-buku/{id}', 'PeminjamanbukuController@destroy')->name('peminjaman-buku.d');
    Route::get('peminjaman-buku/{id}/edit', 'PeminjamanbukuController@edit')->name('peminjaman-buku.e');
    Route::patch('peminjaman-buku/{id}', 'PeminjamanbukuController@update')->name('peminjaman-buku.u');
    Route::get('peminjaman-buku/{id}/detail', 'PeminjamanbukuController@show')->name('peminjaman-buku.v');
    Route::get('peminjaman-buku/cari', 'PeminjamanbukuController@cari')->name('peminjaman-buku.c');
    Route::get('peminjaman-buku/cetak', 'PeminjamanbukuController@cetak')->name('peminjaman-buku.ct');
    //cetak
    Route::get('peminjaman-buku/print', 'CetakpeminjamanbukuController@pdf')->name('peminjaman-buku.p');

    /*------------------ Pengembalian Arsip--------------------------*/
    //pengembalian Berkas
    Route::get('pengembalian-berkas', 'PengembalianberkasController@index')->name('pengembalian-berkas');
    Route::get('pengembalian-berkas/tambah', 'PengembalianberkasController@create')->name('pengembalian-berkas.t');
    Route::post('pengembalian-berkas', 'PengembalianberkasController@store')->name('pengembalian-berkas.s');
    Route::delete('pengembalian-berkas/{id}', 'PengembalianberkasController@destroy')->name('pengembalian-berkas.d');
    Route::get('pengembalian-berkas/{id}/edit', 'PengembalianberkasController@edit')->name('pengembalian-berkas.e');
    Route::patch('pengembalian-berkas/{id}', 'PengembalianberkasController@update')->name('pengembalian-berkas.u');
    Route::get('pengembalian-berkas/{id}/detail', 'PengembalianberkasController@show')->name('pengembalian-berkas.v');
    Route::get('pengembalian-berkas/cari', 'PengembalianberkasController@cari')->name('pengembalian-berkas.c');
    Route::get('pengembalian-berkas/cetak', 'PengembalianberkasController@cetak')->name('pengembalian-berkas.ct');
    //cetak
    Route::get('pengembalian-berkas/print', 'CetakpengembalianberkasController@pdf')->name('pengembalian-berkas.p');

    //pengembalian Buku
    Route::get('pengembalian-buku', 'PengembalianbukuController@index')->name('pengembalian-buku');
    Route::get('pengembalian-buku/tambah', 'PengembalianbukuController@create')->name('pengembalian-buku.t');
    Route::post('pengembalian-buku', 'PengembalianbukuController@store')->name('pengembalian-buku.s');
    Route::delete('pengembalian-buku/{id}', 'PengembalianbukuController@destroy')->name('pengembalian-buku.d');
    Route::get('pengembalian-buku/{id}/edit', 'PengembalianbukuController@edit')->name('pengembalian-buku.e');
    Route::patch('pengembalian-buku/{id}', 'PengembalianbukuController@update')->name('pengembalian-buku.u');
    Route::get('pengembalian-buku/{id}/detail', 'PengembalianbukuController@show')->name('pengembalian-buku.v');
    Route::get('pengembalian-buku/cari', 'PengembalianbukuController@cari')->name('pengembalian-buku.c');
    Route::get('pengembalian-buku/cetak', 'PengembalianbukuController@cetak')->name('pengembalian-buku.ct');
    //cetak
    Route::get('pengembalian-buku/print', 'CetakpengembalianbukuController@pdf')->name('pengembalian-buku.p');

    //Logout
    Route::get('logout', 'otentikasi\OtentikasiController@logout')->name('logout');
});





Route::get('/home', 'HomeController@index')->name('home');

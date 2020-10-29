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
    Route::get('op-berkas', 'OpnameberkasController@index')->name('op-berkas');
    Route::get('op-berkas/tambah', 'OpnameberkasController@create')->name('op-berkas.t');
    Route::post('op-berkas', 'OpnameberkasController@store')->name('op-berkas.s');
    Route::delete('op-berkas/{id}', 'OpnameberkasController@destroy')->name('op-berkas.d');
    Route::get('op-berkas/edit/{id}', 'OpnameberkasController@edit')->name('op-berkas.e');
    Route::patch('op-berkas/{id}', 'OpnameberkasController@update')->name('op-berkas.u');

    //Stockopname Buku
    Route::get('op-buku', 'OpnamebukuController@index')->name('op-buku');
    Route::get('op-buku/tambah', 'OpnamebukuController@create')->name('op-buku.t');
    Route::post('op-buku', 'OpnamebukuController@store')->name('op-buku.s');
    Route::delete('op-buku/{id}', 'OpnamebukuController@destroy')->name('op-buku.d');
    Route::get('op-buku/edit/{id}', 'OpnamebukuController@edit')->name('op-buku.e');
    Route::patch('op-buku/{id}', 'OpnamebukuController@update')->name('op-buku.u');

    /*------------------ peminjaman arsip --------------------------*/
    //peminjaman arsip Berkas
    Route::get('peminjaman-arsip/berkas', 'PeminjamanberkasController@index')->name('peminjaman-arsip/berkas');
    Route::get('peminjaman-arsip/berkas/tambah', 'PeminjamanberkasController@create')->name('pa-berkas.t');
    Route::post('peminjaman-arsip/berkas', 'PeminjamanberkasController@store')->name('pa-berkas.s');
    Route::delete('peminjaman-arsip/berkas/{id}', 'PeminjamanberkasController@destroy')->name('pa-berkas.d');
    Route::get('peminjaman-arsip/berkas//edit/{id}', 'PeminjamanberkasController@edit')->name('pa-berkas.e');
    Route::patch('peminjaman-arsip/berkas/{id}', 'PeminjamanberkasController@update')->name('pa-berkas.u');

    //peminjaman arsip buku
    Route::get('peminjaman-arsip/buku', 'PeminjamanbukuController@index')->name('peminjaman-arsip/buku');
    Route::get('peminjaman-arsip/buku/tambah', 'PeminjamanbukuController@create')->name('pa-buku.t');
    Route::post('peminjaman-arsip/buku', 'PeminjamanbukuController@store')->name('pa-buku.s');
    Route::delete('peminjaman-arsip/buku/{id}', 'PeminjamanbukuController@destroy')->name('pa-buku.d');
    Route::get('peminjaman-arsip/buku//edit/{id}', 'PeminjamanbukuController@edit')->name('pa-buku.e');
    Route::patch('peminjaman-arsip/buku/{id}', 'PeminjamanbukuController@update')->name('pa-buku.u');

    /*------------------ pengembalian arsip --------------------------*/
    //pengembalian arsip Berkas
    Route::get('pengembalian-arsip/berkas', 'PengembalianberkasController@index')->name('pengembalian-arsip/berkas');
    Route::get('pengembalian-arsip/berkas/tambah', 'PengembalianberkasController@create')->name('penga-berkas.t');
    Route::post('pengembalian-arsip/berkas', 'PengembalianberkasController@store')->name('penga-berkas.s');
    Route::delete('pengembalian-arsip/berkas/{id}', 'PengembalianberkasController@destroy')->name('penga-berkas.d');
    Route::get('pengembalian-arsip/berkas/{id}/edit', 'PengembalianberkasController@edit')->name('penga-berkas.e');
    Route::patch('peminjaman-arsip/berkas/{id}', 'PengembalianberkasController@update')->name('penga-berkas.u');

    //peminjaman arsip buku
    Route::get('pengembalian-arsip/buku', 'PengembalianbukuController@index')->name('pengembalian-arsip/buku');
    Route::get('pengembalian-arsip/buku/tambah', 'PengembalianbukuController@create')->name('penga-buku.t');
    Route::post('pengembalian-arsip/buku', 'PengembalianbukuController@store')->name('penga-buku.s');
    Route::delete('pengembalian-arsip/buku/{id}', 'PengembalianbukuController@destroy')->name('penga-buku.d');
    Route::get('pengembalian-arsip/buku/{id}/edit', 'PengembalianbukuController@edit')->name('penga-buku.e');
    Route::patch('pengembalian-arsip/buku/{id}', 'PengembalianbukuController@update')->name('penga-buku.u');
    //Logout
    Route::get('logout', 'otentikasi\OtentikasiController@logout')->name('logout');
});





Route::get('/home', 'HomeController@index')->name('home');

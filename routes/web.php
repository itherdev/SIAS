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
    Route::delete('operator/{id}', 'OperatorController@destroy')->name('op.d');
    Route::get('operator/{id}/edit', 'OperatorController@edit')->name('op.e');
    Route::patch('operator/{id}', 'OperatorController@update')->name('op.u');

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
    //Logout
    Route::get('logout', 'otentikasi\OtentikasiController@logout')->name('logout');
});





Route::get('/home', 'HomeController@index')->name('home');

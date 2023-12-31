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

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/week1-hello', function () {
    return view('week1-hello');
});

Route::get('/week2-link', function () {
    return view('week2-link');
});

Route::get('/week2-news', function () {
    return view('week2-news');
});

Route::get('/tugasLinktree', function () {
    return view('tugasLinktree');
});

Route::get('/week4-latihan1', function () {
    return view('week4-latihan1');
});

Route::get('/week5-js1', function () {
    return view('week5-js1');
});

Route::get('/week5-js2', function () {
    return view('week5-js2');
});

Route::get('/week6-validasi1', function () {
    return view('week6-validasi1');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('/employee/{nama}', 'App\Http\Controllers\DosenController@showNama');
Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');
Route::get('/nilaikuliah/tambahNilai','App\Http\Controllers\NilaiController@tambah');

Route::get('/blueray', 'App\Http\Controllers\BluerayController@index');
Route::get('/blueray/tambah','App\Http\Controllers\BluerayController@tambah');
Route::post('/blueray/store','App\Http\Controllers\BluerayController@store');
Route::get('/blueray/edit/{kode}','App\Http\Controllers\BluerayController@edit');
Route::post('/blueray/update','App\Http\Controllers\BluerayController@update');
Route::get('/blueray/hapus/{kode}','App\Http\Controllers\BluerayController@hapus');

Route::get('/blueray/cari','App\Http\Controllers\BluerayController@cari');
Route::get('/blueray/view/{kode}','App\Http\Controllers\BluerayController@view');
Route::get('/blueray', 'App\Http\Controllers\BluerayController@index');

Route::get('/kategori', 'App\Http\Controllers\KategoriController@index');
Route::get('/kategori/view/','App\Http\Controllers\KategoriController@view');

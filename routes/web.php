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

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

Route::get('/matakuliah', function () {
    return view('matakuliah');
});

Route::get('/detailkrs', function () {
    return view('detailkrs');
});

Route::get('/krs', function () {
    return view('krs');
});

Route::get('/term', function () {
    return view('term');
});

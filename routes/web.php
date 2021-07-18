<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Auth::routes();

// Route Matkul
Route::resource('makul', 'MakulController');

// Route Mahasiswa
Route::resource('mahasiswa', 'MahasiswaController');

// Route Nilai
Route::resource('nilai', 'NilaiController');

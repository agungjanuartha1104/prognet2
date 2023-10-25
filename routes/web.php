<?php

use Illuminate\Support\Facades\Route;

// Rute untuk menampilkan formulir pembuatan biodata
Route::get('/biodata/create', 'BiodataController@create');

// Rute untuk menangani penyimpanan biodata
Route::post('/biodata', 'BiodataController@store');

// Rute untuk menampilkan biodata yang disimpan dalam sesi
Route::get('/biodata', function () {
    $biodata = session('biodata');
    return view('biodata.create', compact('biodata'));
});

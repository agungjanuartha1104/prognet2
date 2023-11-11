<?php

use App\Http\Controllers\DataDiriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('form');
});

Route::post('/data_diri', [DataDiriController::class, 'prosesForm']);

Route::get('/data/{id}/edit', [DataDiriController::class, 'edit'])->name('data.edit');
Route::patch('/data/{id}', [DataDiriController::class, 'update'])->name('data.update');

Route::get('/show-form', [FormController::class, 'showForm']);


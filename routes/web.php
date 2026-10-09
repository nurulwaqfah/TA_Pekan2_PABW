<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', [LaporBanjirController::class, 'laporan'])
    ->name('laporan.index');

Route::get('/lapor-banjir', [LaporBanjirController::class, 'form'])
    ->name('laporan.form');

Route::post('/lapor-banjir', [LaporBanjirController::class, 'kirim'])
    ->name('laporan.kirim');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', [LaporBanjirController::class, 'home'])
    ->name('home');

Route::get('/lapor-banjir', [LaporBanjirController::class, 'form'])
    ->name('lapor.form');

Route::post('/lapor-banjir', [LaporBanjirController::class, 'kirim'])
    ->name('lapor.kirim');
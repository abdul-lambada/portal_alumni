<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('public.index');

Route::post('/layanan/submit', [PublicController::class, 'submitLayanan'])->name('layanan.submit');

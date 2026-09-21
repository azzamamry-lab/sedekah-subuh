<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Landing page Sedekah Subuh - Yayasan Nur Mirah
*/

Route::get('/', [LandingController::class, 'index'])->name('beranda');
Route::get('/program', [LandingController::class, 'program'])->name('program');
Route::get('/tentang', [LandingController::class, 'tentang'])->name('tentang');
Route::get('/laporan', [LandingController::class, 'laporan'])->name('laporan');
Route::get('/donasi', [LandingController::class, 'donasi'])->name('donasi');

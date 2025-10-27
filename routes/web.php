<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "Sistem Pelaporan Masalah - Teknik Informatika";

});

Route::get('/daftar', function () {
    return "daftar masalah";
    
});
Route::get('/daftar-masalah', function () {
    return "daftar masalah";
    
});

Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/cari', [LaporanController::class, 'search']);
Route::get('/rincian', [LaporanController::class, 'detail']);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('dosen', DosenController::class);
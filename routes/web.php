<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\CardmemController;
use App\Http\Controllers\DaftarBukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;


Route::get('/', [DashboardController::class, 'index']);

Route::get('/daftar', [DaftarController::class, 'index']);
Route::get('/cardmem', [CardmemController::class, 'index']);

Route::post('/userstore', [CardmemController::class, 'userstore']);
Route::get('/delete/{id}', [CardmemController::class, 'delete']);
Route::get('/useradd', [CardmemController::class, 'tambah']);
Route::get('/useredit/{id}', [CardmemController::class, 'useredit']);
Route::post('/usereditsave/{id}', [CardmemController::class, 'usereditsave']);




Route::get('/daftarbuku', [DaftarBukuController::class, 'index']);
Route::get('/peminjaman', [PeminjamanController::class, 'index']);

Route::get('/pengembalian', [PengembalianController::class, 'index']);

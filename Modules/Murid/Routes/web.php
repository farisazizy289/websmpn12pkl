<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SaranController;

Route::prefix('murid')->middleware(['role:Murid', 'auth'])->group(function() {
    Route::get('/', [MuridController::class, 'index']);

    Route::resources([
      'perpustakaan'  => PerpustakaanController::class,
      'pembayaran'    => PembayaranController::class
    ]);
});

Route::get('/kotak-saran', [SaranController::class, 'index'])->name('kotak.saran');
Route::post('/kotak-saran', [SaranController::class, 'store'])->name('kotak.saran.store');

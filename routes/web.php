<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelamarDashboardController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/pelamar/dashboard', [PelamarDashboardController::class, 'index'])->name('pelamar.dashboard');

Route::get('/lowongan/{lowongan}', function($lowongan) {
    return "Halaman detail lowongan untuk ID: " . $lowongan;
})->name('lowongan.show');

Route::get('/dashboard', [PelamarDashboardController::class, 'index'])->name('dashboard');
    // Lowongan
    Route::get('lowongan', [LowonganController::class, 'index'])->name('lowongan.index');
    Route::get('lowongan/{id}', [LowonganController::class, 'show'])->name('lowongan.show');

    // Lamaran
    Route::get('lamaran', [LamaranController::class, 'index'])->name('lamaran.index');
    Route::get('lamaran/{id}', [LamaranController::class, 'show'])->name('lamaran.show');

    // Tes
    Route::get('tes', [TesController::class, 'index'])->name('tes.index');

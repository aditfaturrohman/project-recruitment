<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\LamaranController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/lowongan/{id}', [LowonganController::class, 'show'])->name('lowongan.show');


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->group(function () {
    Route::post('/lamaran/{lowongan}', [LamaranController::class, 'store'])->name('lamaran.store');
});
require __DIR__.'/auth.php';

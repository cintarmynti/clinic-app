<?php

use App\Http\Controllers\Frontend\ArtikelController;
use App\Http\Controllers\Frontend\DokterController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\KlinikController;
use App\Http\Controllers\Frontend\LayananController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk menu
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');
Route::get('/klinik', [KlinikController::class, 'index'])->name('klinik.index');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

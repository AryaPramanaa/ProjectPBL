<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

// Mahasiswa
// Route::get('/dashboard', function () {
//     return view('layouts.dashboardBE');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/pendaftaranPKL', [MahasiswaController::class, 'index']);
// Route::get('/C_PendaftaranPKL',[MahasiswaController::class,'create']);

Route::get('/dashboard',[MahasiswaController::class,'getData'])->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(MahasiswaController::class)->group(function(){
    Route::get('/pendaftaranPKL','index');
    Route::get('/C_PendaftaranPKL','create');
});

// endMahasiswa


// login
Route::get('/login2', function(){
    return view('auth.login-asli');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//end login
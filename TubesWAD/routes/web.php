<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrasiController;


Route::get('/', function () {
    return view('welcome');
});


require __DIR__.'/auth.php';


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('events', EventController::class);
});


Route::middleware(['auth', 'role:peserta'])->group(function () {
    Route::get('/registrasi/create', [RegistrasiController::class, 'create'])
        ->name('registrasi.create');

    Route::post('/registrasi', [RegistrasiController::class, 'store'])
        ->name('registrasi.store');
});

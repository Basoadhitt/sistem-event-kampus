<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RegistrasiController;

// ROOT
Route::get('/', function () {
    return redirect()->route('login.page');
});
/*
|--------------------------------------------------------------------------
| AUTH PAGES
|--------------------------------------------------------------------------
*/
Route::get('/login', function () {
    return view('auth.login');
})->name('login.page');

Route::get('/register', function () {
    return view('auth.register');
})->name('register.page');

/*
|--------------------------------------------------------------------------
| AUTH ACTIONS
|--------------------------------------------------------------------------
*/
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->name('login');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->name('register');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');


/*
|--------------------------------------------------------------------------
| EVENT CRUD - ADMIN ONLY
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/events', [EventController::class, 'index'])
        ->name('events.index');

    Route::get('/events/create', [EventController::class, 'create'])
        ->name('events.create');

    Route::post('/events', [EventController::class, 'store'])
        ->name('events.store');

    Route::get('/events/{id}/edit', [EventController::class, 'edit'])
        ->name('events.edit');

    Route::put('/events/{id}', [EventController::class, 'update'])
        ->name('events.update');

    Route::delete('/events/{id}', [EventController::class, 'destroy'])
        ->name('events.destroy');
});

    Route::middleware(['auth'])->group(function () {

        Route::get('/peserta/events', [RegistrasiController::class, 'index'])
            ->name('peserta.events.index');

        Route::post('/peserta/events/{id}/daftar', [RegistrasiController::class, 'daftar'])
            ->name('peserta.events.daftar');

    });

    Route::middleware(['auth'])->group(function () {

    Route::get('/peserta/events', [RegistrasiController::class, 'index'])
        ->name('peserta.events.index');

    Route::get('/peserta/events/{id}/daftar', [RegistrasiController::class, 'create'])
        ->name('peserta.events.create');

    Route::post('/peserta/events/{id}/daftar', [RegistrasiController::class, 'store'])
        ->name('peserta.events.store');

    Route::delete('/peserta/events/{id}/batal', [RegistrasiController::class, 'batal'])
        ->name('peserta.events.batal');
    
    
});



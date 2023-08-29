<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ApartmentController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Guest\PageController as GuestPageController;

Route::get('/', [GuestPageController::class, 'home'])->name('guest.home');
Route::get('/dashboard', [AdminPageController::class, 'dashboard'])->name('dashboard');

Route::middleware('auth', 'verified')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        

    Route::get('/apartment/trashed', [ApartmentController::class, 'trashed'])->name('apartments.trashed');
    Route::post('/apartment/{apartment}/restore', [ApartmentController::class, 'restore'])->name('apartments.restore');
    Route::delete('/apartment/{apartment}/harddelete', [ApartmentController::class, 'harddelete'])->name('apartments.harddelete');
    route::post('/apartment/{apartment}/cancel', [ApartmentController::class, 'cancel'])->name('apartments.cancel');

    Route::resource('apartments', ApartmentController::class);
    Route::resource('users', UserController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

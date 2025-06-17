<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pages/learning-path', function () {
    return view('/pages/learning-path');
})->middleware(['auth', 'verified'])->name('learning-path');

Route::get('/pages/learn', function () {
    return view('/pages/learn');
})->middleware(['auth', 'verified'])->name('learn');

Route::get('/pages/train', function () {
    return view('/pages/train');
})->middleware(['auth', 'verified'])->name('train');

Route::get('/pages/challenge', function () {
    return view('/pages/challenge');
})->middleware(['auth', 'verified'])->name('challenge');

Route::get('/pages/certificate', function () {
    return view('/pages/certificate');
})->middleware(['auth', 'verified'])->name('certificate');

Route::get('/pages/ai', function () {
    return view('/pages/ai');
})->middleware(['auth', 'verified'])->name('ai');

Route::get('/premium', function () {
    return view('pages.Premium');
})->name('premium');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // RBCA Routes - accessible only by admin role
    Route::middleware(\App\Http\Middleware\AdminMiddleware::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/rbca', [App\Http\Controllers\RBCAController::class, 'index'])->name('rbca');
        Route::put('/users/{user}/update-role', [App\Http\Controllers\RBCAController::class, 'updateRole'])->name('users.updateRole');
        Route::put('/users/{user}/toggle-ban', [App\Http\Controllers\RBCAController::class, 'toggleBan'])->name('users.toggleBan');
        Route::put('/users/{user}/toggle-lock', [App\Http\Controllers\RBCAController::class, 'toggleLock'])->name('users.toggleLock');
        Route::put('/users/{user}/timeout', [App\Http\Controllers\RBCAController::class, 'timeout'])->name('users.timeout');
    });
});

require __DIR__.'/auth.php';

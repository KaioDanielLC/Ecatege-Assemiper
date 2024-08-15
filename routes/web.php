<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\CountController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/empresa', function () {
    return view('pages/empresa/list.blade.php');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [CountController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('empresa', EmpresaController::class)->withTrashed()->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';

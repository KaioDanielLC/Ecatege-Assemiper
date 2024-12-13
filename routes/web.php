<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EmpresaFilialController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\VerificacaoEmpresaController;
use App\Http\Controllers\AlvaraController;
use App\Http\Controllers\PdfController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::get('/dashboard', [CountController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('empresa', EmpresaController::class)->withTrashed()->middleware(['auth', 'verified']);
Route::resource('empresa_filial', EmpresaFilialController::class)->withTrashed()->middleware(['auth', 'verified']);
Route::resource('verificacao_empresa', VerificacaoEmpresaController::class)->withTrashed()->middleware(['auth', 'verified']);
Route::resource('alvara', AlvaraController::class)->withTrashed()->middleware(['auth', 'verified']);
Route::get('/Gerar-pdf/{id}', [PdfController::class, 'GerarPdf'])->name('gerar.pdf');
Route::get('/ImprimirEmpresa/{id}', [PdfController::class, 'ImprimirEmpresa'])->name('ImprimirEmpresa.pdf');
Route::get('/ImprimirEmpresafilial/{id}', [PdfController::class, 'ImprimirEmpresafilial'])->name('ImprimirEmpresafilial.pdf');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware(['auth', 'verified'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
$request->fulfill();

return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
$request->user()->sendEmailVerificationNotification();

return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


require __DIR__.'/auth.php';

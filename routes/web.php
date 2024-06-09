<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

//Login
Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('/');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/validar-login', [AuthenticatedSessionController::class, 'store'])->name('loginPost'); 
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
    Route::get('/dashboard-convalidarCursos', [DashboardController::class, 'convalidarCursos'])->name('convalidarCursos');
    Route::get('/dashboard-historialConvalidaciones', [DashboardController::class, 'historialConvalidaciones'])->name('historialConvalidaciones');  
    Route::get('/dashboard-postulantesRegistrar', [DashboardController::class, 'postulantesRegistrar'])->name('postulantesRegistrar');  
    Route::get('/dashboard-postulantesVisualizar', [DashboardController::class, 'postulantesVisualizar'])->name('postulantesVisualizar');  
});

require __DIR__.'/auth.php';

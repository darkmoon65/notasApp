<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\PanelController;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/login', [LoginController::class, 'mostrar'])->name('login');
    Route::post('/login', [LoginController::class, 'autentificar']);
    Route::get('/registro', [RegisterController::class, 'mostrar'])->name('registro');
    Route::post('/registro', [RegisterController::class, 'registrar']);
});

Route::middleware('auth')->group(function (){
    Route::get('/panel', [PanelController::class, 'mostrar'])->name('panel');
    Route::get('/grupo/{id}', [GrupoController::class, 'mostrar'])->name('grupo');
    Route::post('/suscribir', [GrupoController::class, 'suscribir'])->name('suscribir');
    Route::post('/crear-nota', [NotaController::class, 'crear'])->name('crear-nota');
    Route::post('/salir', [LoginController::class, 'salir'])->name('salir');
});


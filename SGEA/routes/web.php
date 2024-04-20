<?php

use App\Http\Controllers\ArtistasController;
use App\Http\Controllers\ExposicionesController;
use App\Http\Controllers\ObrasdeArteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/artistas', [ArtistasController::class, 'index'])->name('artistas.index');
Route::post('/artistas', [ArtistasController::class, 'store'])->name('artistas.store');
Route::get('/artistas/create', [ArtistasController::class, 'create'])->name('artistas.create');
Route::delete('/artistas/{artista}', [ArtistasController::class, 'destroy'])->name('artistas.destroy');
Route::put('/artistas/{artista}', [ArtistasController::class, 'update'])->name('artistas.update');
Route::get('/artistas/{artista}/edit', [ArtistasController::class, 'edit'])->name('artistas.edit');
////////////////////
Route::get('/exposiciones',[ExposicionesController::class,'index'])->name('exposiciones.index');
Route::post('/exposiciones', [ExposicionesController::class, 'store'])->name('exposiciones.store');
Route::get('/exposiciones/create', [ExposicionesController::class, 'create'])->name('exposiciones.create');
Route::delete('/exposiciones/{exposicion}', [ExposicionesController::class, 'destroy'])->name('exposiciones.destroy');
Route::put('/exposiciones/{exposicion}', [ExposicionesController::class, 'update'])->name('exposiciones.update');
Route::get('/exposiciones/{exposicion}/edit', [ExposicionesController::class, 'edit'])->name('exposiciones.edit');
//////////////////////
Route::get('/obras',[ObrasdeArteController::class,'index']);
Route::post('/obras', [ObrasdeArteController::class, 'store'])->name('obras.store');
Route::get('/obras/create', [ObrasdeArteController::class, 'create'])->name('obras.create');
Route::delete('/obras/{obra}', [ObrasdeArteController::class, 'destroy'])->name('obras.destroy');
Route::put('/obras/{obra}', [ObrasdeArteController::class, 'update'])->name('obras.update');
Route::get('/obras/{obra}/edit', [ObrasdeArteController::class, 'edit'])->name('obras.edit');

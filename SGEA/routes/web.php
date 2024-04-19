<?php

use App\Http\Controllers\ArtistasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artistas',[ArtistasController::class,'index']);
Route::post('/artistas', [ArtistasController::class, 'store'])->name('artistas.store');
Route::get('/artistas/create', [ArtistasController::class, 'create'])->name('artistas.create');
Route::delete('/artistas/{artista}', [ArtistasController::class, 'destroy'])->name('artistas.destroy');
Route::put('/artistas/{artista}', [ArtistasController::class, 'update'])->name('artistas.update');
Route::get('/artistas/{artista}/edit', [ArtistasController::class, 'edit'])->name('artistas.edit');

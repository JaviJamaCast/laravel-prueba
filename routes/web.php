<?php
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\PokemonController;

Route::get('articulos', [ArticuloController::class, 'index'])->name('articulos.index');
Route::get('articulos/create', [ArticuloController::class, 'create'])->name('articulos.create');
Route::get('articulos/{articulo}', [ArticuloController::class, 'show'])->name('articulos.show');
Route::post('articulos/', [ArticuloController::class, 'store'])->name('articulos.store');
Route::delete('/articulos/{articulo}', [ArticuloController::class, 'destroy'])->name('articulos.destroy');
Route::get('/articulos/{articulo}/edit', [ArticuloController::class, 'edit'])->name('articulos.edit');
Route::put('/articulos/{articulo}', [ArticuloController::class, 'update'])->name('articulos.update');

Route::post('articulos/{articulo}/comentarios', [ComentarioController::class, 'store'])->name('comentarios.store');

//-----------------------------------------------------------------------------------------------------------
Route::get('pokemones', [PokemonController::class, 'index'])->name('pokemon.index');
Route::get('pokemones/create', [PokemonController::class, 'create'])->name('pokemon.create');
Route::get('pokemones/{id}', [PokemonController::class, 'show'])->name('pokemon.show');
Route::post('pokemones/', [PokemonController::class, 'store'])->name('pokemon.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

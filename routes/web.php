<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DirectorsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProductionController;

// Routing for admin
Route::get('/', [DashboardController::class, 'index']);

Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/add-film', [FilmController::class, 'create']);
Route::post('/films/add-film', [FilmController::class, 'store']);

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/add-genre', [GenreController::class, 'create']);
Route::post('/genres/add-genre', [GenreController::class, 'store']);

Route::get('/productions', [ProductionController::class, 'index']);
Route::get('/productions/add-production', [ProductionController::class, 'create']);
Route::post('/productions/add-production', [GenreController::class, 'store']);

Route::get('/directors', [DirectorsController::class, 'index']);
Route::get('/directors/add-director', [DirectorsController::class, 'create']);
Route::post('/directors/add-director', [DirectorsController::class, 'store']);


// Route::post('/film/add-film', [FilmController::class, 'create']);

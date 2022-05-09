<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DirectorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


// * Routing for admin * //
Route::get('/', [DashboardController::class, 'index']);

// Register Route
Route::get('/register', [RegisterController::class, 'index']);


// Login Route
Route::get('/login', [LoginController::class, 'index']);

// Films Route
Route::controller(FilmController::class)->group(function () {
    Route::get('/films', 'index');
    Route::get('/films/add-film', 'create');
    Route::post('/films/add-film', 'store');
    Route::get('/films/detail-film/{id_film}', 'show');
});

// Genres Route
Route::controller(GenreController::class)->group(function(){
    Route::get('/genres', 'index');
    Route::get('/genres/add-genre', 'create');
    Route::post('/genres/add-genre', 'store');
});

// Productions Route
Route::controller(ProductionController::class)->group(function () {
    Route::get('/productions',  'index');
    Route::get('/productions/add-production', 'create');
    Route::post('/productions/add-production', 'store');
});


// Directors Route
Route::controller(DirectorController::class)->group(function () {
    Route::get('/directors', 'index');
    Route::get('/directors/add-director', 'create');
    Route::post('/directors/add-director', 'store');
});


// * Routing for public users * //
Route::get('/list-film', function () {
    return view('public-user.landing-page');
});

Route::get('/film', function () {
    return view('public-user.film-page');
});

Route::get('/about', function () {
    return view('public-user.about-page');
});

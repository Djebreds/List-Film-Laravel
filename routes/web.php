<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/* --------------------------------------------
 *
 *
 *
 * */
// ********* Routing for guest *********** //
// Landing Page Views
Route::get('/list-film', function () {
    return view('public-user.landing-page');
})->name('landing-page');

Route::get('/film', function () {
    return view('public-user.film-page');
})->name('film');

Route::get('/about', function () {
    return view('public-user.about-page');
})->name('about');

// Register Route
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    Route::post('/register', 'register')->name('registered');
});

// Login Route
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/profile', 'profile')->name('profile');
});

/* --------------------------------------------
 *
 *
 *
 * */
// ********* Routing for admin ********** //
Route::middleware(['auth' => 'rolecheck:admin'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Films Route
    Route::controller(FilmController::class)->group(function () {
        Route::get('/films', 'index')->name('films');
        Route::get('/films/add-film', 'create')->name('add-film');
        Route::post('/films/add-film', 'store');
        Route::get('/films/detail-film/{id_film}', 'show')->name('detail-film');
    });

// Genres Route
    Route::controller(GenreController::class)->group(function () {
        Route::get('/genres', 'index')->name('genres');
    });

// Productions Route
    Route::controller(ProductionController::class)->group(function () {
        Route::get('/productions', 'index')->name('productions');
        Route::get('/productions/add-production', 'create')->name('add-production');
        Route::post('/productions/add-production', 'store');
    });

// Directors Route
    Route::controller(DirectorController::class)->group(function () {
        Route::get('/directors', 'index')->name('directors');
        Route::get('/directors/add-director', 'create')->name('add-director');
        Route::post('/directors/add-director', 'store');
    });
});

/* --------------------------------------------
 *
 *
 *
 * */
// ******* Routing for public users ******* //
Route::middleware(['auth', 'admin', 'public-user'])->group(function () {


});



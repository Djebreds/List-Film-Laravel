<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LandingPageController;
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
//Route::get('/home', function () {
//    return view('public-user.landing-page');
//})->name('home');

Route::controller(LandingPageController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
});

Route::controller(CategoriesController::class)->group(function () {
    Route::get('/film', 'index')->name('film');
});

//Route::get('/film', function () {
//    return view('public-user.film-page');
//})->name('film');

Route::get('/about', function () {
    return view('public-user.about-page');
})->name('about');

// Register Route
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('register')->middleware('guest');
    Route::post('/register', 'register')->name('registered');
});

// Login Route
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware(['auth' => 'rolecheck:public-user', 'auth' => 'rolecheck:admin'])->group(function () {

});

/* --------------------------------------------
 *
 *
 *
 * */
// ********* Routing for admin ********** //
Route::middleware(['auth' => 'rolecheck:admin'])->group(function () {
    Route::get('/dashboard/profile', [LoginController::class, 'profile'])->name('profile');
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Films Route
    Route::controller(FilmController::class)->group(function () {
        Route::get('/dashboard/films', 'index')->name('films');
        Route::get('/dashboard/films/add-film', 'create')->name('add-film');
        Route::post('/dashboard/films/add-film', 'store')->name('store-film');
        Route::get('/dashboard/films/detail-film/{films}', 'show')->name('detail-film');
        Route::get('/dashboard/films/edit-film/{id_film}', 'edit')->name('edit-film');
        Route::put('/dashboard/films/edit-film/{id_film}', 'update')->name('update-film');
        Route::delete('/dashboard/films/{films}', 'destroy')->name('delete-film');
    });

// Genres Route
    Route::controller(GenreController::class)->group(function () {
        Route::get('dashboard/genres', 'index')->name('genres');
    });

// Productions Route
    Route::controller(ProductionController::class)->group(function () {
        Route::get('dashboard/productions', 'index')->name('productions');
        Route::get('dashboard/productions/add-production', 'create')->name('add-production');
        Route::post('dashboard/productions/add-production', 'store')->name('store-production');
//        Route::get('dashboard/production/detail-production/{productions}', 'show')->name('detail-production');
        Route::get('dashboard/production/edit-production/{productions}', 'edit')->name('edit-production');
        Route::put('dashboard/production/edit-production/{productions}', 'update')->name('update-production');
        Route::delete('dashboard/production/{productions}', 'destroy')->name('delete-production');
    });

// Directors Route
    Route::controller(DirectorController::class)->group(function () {
        Route::get('dashboard/directors', 'index')->name('directors');
        Route::get('dashboard/directors/add-director', 'create')->name('add-director');
        Route::post('dashboard/directors/add-director', 'store')->name('store-director');
        Route::get('dashboard/directors/detail-director/{directors}', 'show')->name('detail-director');
        Route::get('dashboard/directors/edit-director/{directors}', 'edit')->name('edit-director');
        Route::put('dashboard/directors/edit-director/{directors}', 'update')->name('update-director');
        Route::delete('dashboard/directors/{directors}', 'destroy')->name('delete-director');
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



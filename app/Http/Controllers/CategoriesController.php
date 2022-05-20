<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\Genre_list;

class CategoriesController extends Controller
{
    public function index()
    {
        $films = Films::join('films_genres', 'films.id_film', '=', 'films_genres.film_id')
            ->join('films_productions', 'films.id_film', '=', 'films_productions.film_id')
            ->join('films_directors', 'films.id_film', '=', 'films_directors.film_id')
            ->join('genres_films', 'genres_films.genre_id', '=', 'films_genres.genre_id')
            ->join('productions', 'productions.id_production', '=', 'films_productions.production_id')
            ->join('directors', 'directors.id', '=', 'films_directors.directors_id')
            ->latest('films.updated_at')
            ->get();

        $genres = Genre_list::all();
        return view('public-user.film-page', compact('films', 'genres'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\Genre_list;

class LandingPageController extends Controller
{
    public function index()
    {
        define('CURRENTDATE', '2022-01-01');
        define('RECOMEND', '2022-01-01');
        define('POPULAR', ['Interstellar', 'Godzilla vs Kong', 'Joker', 'Avengers End Game', 'Frozen 2', 'Pikachu', 'Brave', 'Aladdin', 'Aquaman']);

        $populars = Films::join('films_genres', 'films.id_film', '=', 'films_genres.film_id')
            ->join('films_productions', 'films.id_film', '=', 'films_productions.film_id')
            ->join('films_directors', 'films.id_film', '=', 'films_directors.film_id')
            ->join('genres_films', 'genres_films.genre_id', '=', 'films_genres.genre_id')
            ->join('productions', 'productions.id_production', '=', 'films_productions.production_id')
            ->join('directors', 'directors.id', '=', 'films_directors.directors_id')
            ->where('films.title', '=', POPULAR[0])
            ->orWhere('films.title', '=', POPULAR[1])
            ->orWhere('films.title', '=', POPULAR[2])
            ->orWhere('films.title', '=', POPULAR[3])
            ->orWhere('films.title', '=', POPULAR[4])
            ->orWhere('films.title', '=', POPULAR[5])
            ->orWhere('films.title', '=', POPULAR[6])
            ->orWhere('films.title', '=', POPULAR[7])
            ->orWhere('films.title', '=', POPULAR[8])
            ->paginate(8);

        $upcomings = Films::join('films_genres', 'films.id_film', '=', 'films_genres.film_id')
            ->join('films_productions', 'films.id_film', '=', 'films_productions.film_id')
            ->join('films_directors', 'films.id_film', '=', 'films_directors.film_id')
            ->join('genres_films', 'genres_films.genre_id', '=', 'films_genres.genre_id')
            ->join('productions', 'productions.id_production', '=', 'films_productions.production_id')
            ->join('directors', 'directors.id', '=', 'films_directors.directors_id')
            ->where('films.release_date', '<=', CURRENTDATE)
            ->paginate(14);

        $recomendations = Films::join('films_genres', 'films.id_film', '=', 'films_genres.film_id')
            ->join('films_productions', 'films.id_film', '=', 'films_productions.film_id')
            ->join('films_directors', 'films.id_film', '=', 'films_directors.film_id')
            ->join('genres_films', 'genres_films.genre_id', '=', 'films_genres.genre_id')
            ->join('productions', 'productions.id_production', '=', 'films_productions.production_id')
            ->join('directors', 'directors.id', '=', 'films_directors.directors_id')
            ->where('films.release_date', '<', RECOMEND)
            ->paginate(14);

        $films = Films::join('films_genres', 'films.id_film', '=', 'films_genres.film_id')
            ->join('films_productions', 'films.id_film', '=', 'films_productions.film_id')
            ->join('films_directors', 'films.id_film', '=', 'films_directors.film_id')
            ->join('genres_films', 'genres_films.genre_id', '=', 'films_genres.genre_id')
            ->join('productions', 'productions.id_production', '=', 'films_productions.production_id')
            ->join('directors', 'directors.id', '=', 'films_directors.directors_id')
            ->latest('films.updated_at')
            ->paginate(14);

        $colors = ['#fd7e14', '#6610f2', '#6f42c1', '#d63384', '#dc3545', '#fd7e14', '#ffc107', '#198754', '#20c997', '#0dcaf0', '000', '000', '000', '000', '000'];
        $genres = Genre_list::get();
        if (request('search')) {
            $films = Films::join('films_genres', 'films.id_film', '=', 'films_genres.film_id')
                ->join('films_productions', 'films.id_film', '=', 'films_productions.film_id')
                ->join('films_directors', 'films.id_film', '=', 'films_directors.film_id')
                ->join('genres_films', 'genres_films.genre_id', '=', 'films_genres.genre_id')
                ->join('productions', 'productions.id_production', '=', 'films_productions.production_id')
                ->join('directors', 'directors.id', '=', 'films_directors.directors_id')
                ->where('films.title', 'like', '%' . request('search') . '%')
                ->orWhere('genres_films.genre_name', 'like', '%' . request('search') . '%')
                ->orWhere('productions.name_production', 'like', '%' . request('search') . '%')
                ->orWhere('films.release_date', 'like', '%' . request('search') . '%')
                ->orWhere('directors.name_director', 'like', '%' . request('search') . '%')
                ->paginate(15);
        }
        return view('public-user.landing-page', compact('films', 'recomendations', 'populars', 'upcomings', 'genres', 'genres'));
    }
}

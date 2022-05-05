<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Films;
use App\Models\Genre_list;

class FilmController extends Controller
{

    public function index()
    {
        $films = Films::join('films_genres', 'films.id_film', '=', 'films_genres.film_id')
            ->join('films_productions', 'films.id_film', '=', 'films_productions.film_id')
            ->join('films_directors', 'films.id_film', '=', 'films_directors.film_id')
            ->join('genres_films', 'genres_films.genre_id', '=', 'films_genres.genre_id')
            ->join('productions', 'productions.id_production', '=', 'films_productions.production_id')
            ->join('directors', 'directors.id', '=', 'films_directors.directors_id')
            ->paginate(15);

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

        return view('admin.films', compact('films'));
    }

    public function search(Request $request)
    {
        // ->get(['films.id_film', 'films.picture', 'films.title', 'genres_films.genre_name', 'productions.name_production', 'films.release_date', 'directors.name_director', 'films.trailer']);
        $search = $request->search;

        $films = Films::join('films_genres', 'films.id_film', '=', 'films_genres.film_id')
            ->join('films_productions', 'films.id_film', '=', 'films_productions.film_id')
            ->join('films_directors', 'films.id_film', '=', 'films_directors.film_id')
            ->join('genres_films', 'genres_films.genre_id', '=', 'films_genres.genre_id')
            ->join('productions', 'productions.id_production', '=', 'films_productions.production_id')
            ->join('directors', 'directors.id', '=', 'films_directors.directors_id')
            ->where('films.title', 'like', $search . '%', 'or', 'geres_films.genre_name', 'like', '%' . $search, 'or', 'films.release_date', 'like', '%' . $search, 'or', 'productions.name_production', 'like', '%' . $search)
            ->paginate();
        return view('admin.films', compact('films'));
    }

    public function create()
    {
        return view('admin.add-film');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id_film)
    {
        $films = Films::join('films_genres', 'films.id_film', '=', 'films_genres.film_id')
            ->join('films_productions', 'films.id_film', '=', 'films_productions.film_id')
            ->join('films_directors', 'films.id_film', '=', 'films_directors.film_id')
            ->join('genres_films', 'genres_films.genre_id', '=', 'films_genres.genre_id')
            ->join('productions', 'productions.id_production', '=', 'films_productions.production_id')
            ->join('directors', 'directors.id', '=', 'films_directors.directors_id')
            ->find($id_film);
        return view('admin.detail-film', compact('films'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

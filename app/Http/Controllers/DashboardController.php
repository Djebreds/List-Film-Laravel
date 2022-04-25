<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Directors;
use App\Models\Productions;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $films_limit = Film::join('films_genres', 'films.id_film', '=', 'films_genres.film_id')
            ->join('films_productions', 'films.id_film', '=', 'films_productions.film_id')
            ->join('films_directors', 'films.id_film', '=', 'films_directors.film_id')
            ->join('genres_films', 'genres_films.genre_id', '=', 'films_genres.genre_id')
            ->join('productions', 'productions.id_production', '=', 'films_productions.production_id')
            ->join('directors', 'directors.id', '=', 'films_directors.directors_id')
            ->limit(10)
            ->get(['films.id_film', 'films.picture', 'films.title', 'genres_films.genre_name', 'productions.name_production', 'films.release_date', 'directors.name_director', 'films.trailer']);

        $directors_limit = Directors::limit(10)->get();
        $productions_limit = Productions::limit(10)->get();

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'films' => $films_limit,
            'directors' => $directors_limit,
            'productions' => $productions_limit
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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

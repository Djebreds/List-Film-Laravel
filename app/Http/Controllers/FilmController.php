<?php

namespace App\Http\Controllers;

use App\Models\Directors;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Productions;
use Illuminate\Http\Request;
use App\Models\Films;
use App\Models\Genre_list;
use Illuminate\Support\Str;

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
        return view('admin.add-film', ['genres' => Genre_list::all(), 'productions' => Productions::all(), 'directors' => Directors::all()]);
    }


    public function store(Request $request)
    {
//        ddd($request);
//        return $request->file('picture')->store('uploaded');
        $validate = $request->validate([
           'title' => 'required|min:3|max:50',
            'genres' => 'required',
            'trailer' => 'required',
            'runtime' => 'required|min:2|max:4',
            'release_date' => 'required',
            'picture' => 'required|image|file|max:1024',
            'director' => 'required',
            'production' => 'required',
            'synopsis' => 'required|min:10'
        ]);

        $validate['excerpt'] = Str::limit($request->title, 20);
//        $coba = Films::create($validate);
//        $test = Films::create(Request::only(
//            'title',
//            'trailer',
//            'runtime',
//            'release_date',
//            'synopsis',
//        ));
//        Film::create($validate->only('title', 'runtime', 'release_date', 'trailer', 'synopsis'));
//        Directors::create($validate->only('director'));
//        Productions::create($validate->only('production'));
//        Genre::create($validate->only('genre_list'));
          $result = Films::create($validate);
//
//        Directors::create(Request::only('director');
//        Productions::create(Request::only('production'));
//        Genre_list::create(Request::only('genre_list'));

        dd($result);

        return redirect('admin.add-film')->with('success', 'Film added successfully.');
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

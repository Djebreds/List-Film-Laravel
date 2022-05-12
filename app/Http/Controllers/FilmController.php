<?php

namespace App\Http\Controllers;

use App\Models\Directors;
use App\Models\Films;
use App\Models\Films_directors;
use App\Models\Films_genres;
use App\Models\Films_productions;
use App\Models\Genre_list;
use App\Models\Genres_films;
use App\Models\Productions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            ->latest()
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
        $validate = $request->validate([
            'title' => 'required|min:3|max:50',
            'genres' => 'required',
            'trailer' => ['required', 'url', 'regex:/^https?\:\/\/(?:www\.youtube(?:\-nocookie)?\.com\/|m\.youtube\.com\/|youtube\.com\/)?(?:ytscreeningroom\?vi?=|youtu\.be\/|vi?\/|user\/.+\/u\/\w{1,2}\/|embed\/|watch\?(?:.*\&)?vi?=|\&vi?=|\?(?:.*\&)?vi?=)([^#\&\?\n\/<>"\']*)/i'],
            'runtime' => 'required|numeric',
            'release_date' => 'required',
            'picture' => 'required|image|file|mimes:jpg,png,jpeg|max:1024',
            'director' => 'required',
            'production' => 'required',
            'synopsis' => 'required|min:10'
        ]);

        // *******
//         Used for public user to show title films

//        $validate['excerpt'] = Str::limit($request->title, 30, '...');
//        $get = DB::table('films')->get('title')->first();
//        $validate['excerpt'] = Str::limit($get->title, 20, '...');
//        ddd($validate['excerpt']);

        // ******

        // merging genre
        $merge_genre = implode(", ", $validate['genres']);
        // validation url trailer
        $regex = '/(?:https?:)?(?:\/\/)?(?:[0-9A-Z-]+\.)?(?:youtu\.be\/|youtube(?:-nocookie)?\.com\S*?[^\w\s-])([\w-]{11})(?=[^\w-]|$)(?![?=&+%\w.-]*(?:[\'"][^<>]*>|<\/a>))[?=&+%\w.-]*/';
        $get_trailer = $request->input('trailer');
        preg_match($regex, $get_trailer, $result);
        $trailer = isset($result[1]) ? $result[1] : null;
        $validate_trailer = "https://youtube.com/embed/" . $trailer;

//         films inserting
        // uploading picture
        $request->file('picture')->store('uploaded');

        $result = Films::create([
            'title' => $validate['title'],
            'trailer' => $validate_trailer,
            'runtime' => $validate['runtime'],
            'picture' => $request->file('picture')->hashName(),
            'release_date' => $validate['release_date'],
            'synopsis' => $validate['synopsis']
        ]);

//         merge genre inserting
        Genres_films::create([
            'genre_name' => $merge_genre
        ]);

        // get last_id from every tables
        $last_id_film = DB::table('films')->latest('id_film')->first();
        $last_id_genres_film = DB::table('genres_films')->latest('genre_id')->first();

        Films_genres::create([
            'film_id' => $last_id_film->id_film,
            'genre_id' => $last_id_genres_film->genre_id
        ]);

        Films_productions::create([
            'film_id' => $last_id_film->id_film,
            'production_id' => $validate['production']
        ]);

        Films_directors::create([
            'film_id' => $last_id_film->id_film,
            'directors_id' => $validate['director']
        ]);

        return back()->with('status', 'Film added successfully! ');
    }


    public function show($id_film)
    {
        $films = Films::join('films_genres', 'films.id_film', '=', 'films_genres.film_id')
            ->join('films_productions', 'films.id_film', '=', 'films_productions.film_id')
            ->join('films_directors', 'films.id_film', '=', 'films_directors.film_id')
            ->join('genres_films', 'genres_films.genre_id', '=', 'films_genres.genre_id')
            ->join('productions', 'productions.id_production', '=', 'films_productions.production_id')
            ->join('directors', 'directors.id', '=', 'films_directors.directors_id')
            ->get()
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

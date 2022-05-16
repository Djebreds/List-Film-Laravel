<?php

namespace App\Http\Controllers;

use App\Models\Genre_list;
use http\Env\Request;

class GenreController extends Controller
{

    public function index()
    {
        $genres = Genre_list::where('id_list', '>', 0)->latest('updated_at', 'created_at')->paginate(10);
        if (request('search')) {
            $genres = Genre_list::where('genre_list', 'like', '%' . request('search') . '%')
                ->latest('updated_at', 'created_at')
                ->paginate(15);
        }
        return view('admin.genres-film.genres', compact('genres'));
    }


//    public function create()
//    {
//        return view('admin.add-genre');
//    }


//    public function store(Request $request)
//    {
//        $genre = new Genre_list();
//        $genre->genre_list = $request->input('genre_list');
//        $genre->save();
//        return redirect()->back()->with('status', 'Genre Successfully to added');
//    }

    public function edit(Genre_list $genre)
    {
        return view('admin.genres-film.edit-genre', compact($genre));
    }

    public function update(Request $request, Genre_list $genre)
    {
        $validate = $request->validate([
            'genre_list' => 'required|string|min:3|max:50'
        ]);
        $genre->update($validate);

        return back()->with('status', 'Genre successfully to edited');
    }


    public function destroy(Genre_list $genre)
    {
        $genre->delete();
        return redirect()->route('genres')->with('status', 'Genre has been deleted!');
    }
}

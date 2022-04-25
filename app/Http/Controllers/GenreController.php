<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{

    public function index()
    {
        $genres = DB::table('genre_list')->get();
        return view('admin.genres', compact('genres'));
    }


    public function create()
    {
        return view('admin.add-genre');
    }


    public function store(Request $request)
    {
        $genre = new Genre();
        $genre->genre_list = $request->input('genre_list');
        $genre->save();
        return redirect()->back()->with('status', 'Genre Successfully to added');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

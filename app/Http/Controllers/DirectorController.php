<?php

namespace App\Http\Controllers;

use App\Models\Directors;
use Illuminate\Http\Request;

class DirectorController extends Controller
{

    public function index()
    {
        $directors = Directors::paginate(10);
        if (request('search')) {
            $directors = Directors::where('name_director', 'like', '%' . request('search') . '%')
                ->latest('updated_at', 'created_at')
                ->paginate(15);
        }
        return view('admin.directors-film.directors', compact('directors'));
    }

    public function create()
    {
        return view('admin.directors-film.add-director');
    }


    public function store(Request $request)
    {
        $validate = $request->validate([
            'name_director' => 'required|string|min:3|max:50',
            'about' => 'required|min:10'
        ]);
        Directors::create($validate);
        return back()->with('status', 'Director successfully to added!');
    }


    public function show(Directors $directors)
    {
        return view('admin.directors-film.detail-director', compact('directors'));
    }


    public function edit(Directors $directors)
    {
        return view('admin.directors-film.edit-director', compact('directors'));
    }


    public function update(Request $request, Directors $directors)
    {
        $validate = $request->validate([
            'name_director' => 'required|string|min:3|max:50',
            'about' => 'required|min:10'
        ]);
        $directors->update($validate);
        return back()->with('status', 'Director successfully to edit!');
    }

    public function destroy(Directors $directors)
    {
        $directors->delete();
        return redirect()->route('directors')->with('status', 'Directors has been deleted!');
    }
}

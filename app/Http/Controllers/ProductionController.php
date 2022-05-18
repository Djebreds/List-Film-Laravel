<?php

namespace App\Http\Controllers;

use App\Models\Productions;
use Illuminate\Http\Request;


class ProductionController extends Controller
{

    public function index()
    {
        $productions = Productions::latest()->paginate(10);

        if (request('search')) {
            $productions = Productions::where('name_production', 'like', '%' . request('search') . '%')
                ->orWhere('founded_date', 'like', '%' . request('search') . '%')
                ->latest('updated_at', 'created_at')
                ->paginate(15);
        }
        return view('admin.productions-film.productions', compact('productions'));
    }

    public function create()
    {
        return view('admin.productions-film.add-production');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name_production' => 'required|string|min:3|max:50',
            'founded_date' => 'required'
        ]);
        Productions::create($validate);
        return back()->with('status', 'New Production successfully to added');
    }

    public function edit(Productions $productions)
    {
        return view('admin.productions-film.edit-production', compact('productions'));
    }


    public function update(Request $request, Productions $productions)
    {
        $validate = $request->validate([
            'name_production' => 'required|string|min:3|max:50',
            'founded_date' => 'required'
        ]);

        $productions->update($validate);
        return back()->with('status', 'Production successfully edited');
    }


    public function destroy(Productions $productions)
    {
        $productions->delete();
        return redirect()->route('productions')->with('status', 'Productions has been deleted!');
    }
}


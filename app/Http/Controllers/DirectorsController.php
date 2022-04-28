<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directors;

class DirectorsController extends Controller
{

    public function index()
    {
        $directors = Directors::paginate(10);
        return view('admin.directors', compact('directors'));
    }

    public function create()
    {
        return view('admin.add-director');
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

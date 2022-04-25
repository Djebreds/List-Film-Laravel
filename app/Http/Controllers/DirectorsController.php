<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DirectorsController extends Controller
{

    public function index()
    {
        $directors = DB::table('directors')->get();
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

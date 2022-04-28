<?php

namespace App\Http\Controllers;

use App\Models\Productions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductionController extends Controller
{

    public function index()
    {
        $productions = Productions::paginate(10);
        return view('admin.productions', compact('productions'));
    }


    public function create()
    {
        return view('admin.add-production');
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

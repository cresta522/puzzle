<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumpreController extends Controller
{
    public function index(Request $request)
    {
        return view('puzzles.numpre.index');
    }

    public function create(Request $request)
    {
        return view('puzzles.numpre.create');
    }

    public function items(Request $request)
    {
        return view('puzzles.numpre.items');
    }
}

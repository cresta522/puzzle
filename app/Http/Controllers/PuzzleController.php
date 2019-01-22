<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PuzzleController extends Controller
{

    public function dashboard()
    {
        return view('puzzles.dashboard');
    }
}

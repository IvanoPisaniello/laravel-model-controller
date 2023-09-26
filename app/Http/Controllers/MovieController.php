<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $dati = Movie::all();

        dd($dati);
        return view('movie');
    }
}

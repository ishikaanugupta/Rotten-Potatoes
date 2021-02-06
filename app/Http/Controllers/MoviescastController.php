<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviescastController extends Controller
{
    public function index()
    {
        $moviescasts = Moviecast::all();

        return view('main.actor', compact('moviescast'));
    }
}

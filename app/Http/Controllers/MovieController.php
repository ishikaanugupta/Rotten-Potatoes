<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use DB;

class MovieController extends Controller
{
    /* public function __construct()
    {
        $this->middleware('auth')->except('index');
    }*/
    public function index()
    {
        $movies = DB::select('select * from movies');

        foreach ($movies as $movie) {
            $dataURI = (string)base64_encode($movie->poster);
            $movie->poster = $dataURI;
        }
        return view('movie', compact('movies'));
    }

    public function main($imdbID)
    {
        $table = DB::table('moviescasts')
            ->join('movies', 'moviescasts.movieimdbID', '=', 'movies.imdbID')
            ->join('actors', 'moviescasts.castimdbID', '=', 'actors.imdbID')
            ->select('moviescasts.*', 'actors.name', 'actors.headshot', 'actors.imdbID', 'movies.imdbID');

        $actors = $table->where('movies.imdbID', '=', $imdbID)->get();

        foreach ($actors as $actor) {
            $dataURI = (string)base64_encode($actor->headshot);
            $actor->headshot = $dataURI;
        }

        $movie = Movie::find($imdbID);

        $movies = DB::table('movies')->select('imdbID')->where('imdbID', '=', $imdbID)->first();

        $dataURI = (string)base64_encode($movie->poster);
        $movie->poster = $dataURI;

        $review = DB::table('moviereviews')
            ->join('movies', 'moviereviews.movieimdbID', '=', 'movies.imdbID')
            ->join('users', 'moviereviews.userID', '=', 'users.id')
            ->select('moviereviews.*', 'users.name', 'users.avatar', 'movies.imdbID');

        $user = $review->where('movies.imdbID', '=', $imdbID)->get();



        return view('main.movie', compact('movies', 'movie', 'actors', 'user'));
    }
}

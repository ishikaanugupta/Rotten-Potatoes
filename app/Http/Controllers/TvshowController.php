<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tvshow;
use DB;

class TvshowController extends Controller
{
    public function index()
    {
        $tvshows = DB::select('select * from tvshows');

        foreach ($tvshows as $tvshow) {
            $dataURI = (string)base64_encode($tvshow->poster);
            $tvshow->poster = $dataURI;
        }
        return view('tvshow', ["tvshows" => $tvshows]);
    }
    public function main($imdbID)
    {

        $table = DB::table('tvshowscasts')
            ->join('tvshows', 'tvshowscasts.tvseriesimdbID', '=', 'tvshows.imdbID')
            ->join('actors', 'tvshowscasts.castimdbID', '=', 'actors.imdbID')
            ->select('tvshowscasts.*', 'actors.name', 'actors.headshot', 'actors.imdbID');

        $actors = $table->where('tvshows.imdbID', '=', $imdbID)->get();

        foreach ($actors as $actor) {
            $dataURI = (string)base64_encode($actor->headshot);
            $actor->headshot = $dataURI;
        }

        $tvshow = Tvshow::find($imdbID);

        $dataURI = (string)base64_encode($tvshow->poster);
        $tvshow->poster = $dataURI;


        return view('main.tvshow', compact('tvshow', 'actors'));
    }
}

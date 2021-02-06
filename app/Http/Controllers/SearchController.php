<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Actor;
use App\Models\Tvshow;
use DB;

class SearchController extends Controller
{
  public function search()
  {
    $search_text = $_GET['query'];

    if (isset($search_text)) {

      $movies = DB::table('movies')
        ->select('title', 'plot', 'poster', 'imdbID')
        ->where('title', 'LIKE', '%' . $search_text . '%');


      $actors = DB::table('actors')
        ->select('name', 'bio', 'headshot', 'imdbID')
        ->where('name', 'LIKE', '%' . $search_text . '%');


      $tvshows = DB::table('tvshows')
        ->select('title', 'plot', 'poster', 'imdbID')
        ->where('title', 'LIKE', '%' . $search_text . '%')
        ->unionAll($movies)
        ->unionAll($actors);

      $table = $tvshows->get();

      if ($table->count() > 0) {
        return view('main.search', compact('table'));
      } else {

        return view('main.nosearch');
      }
    }
  }

  public function main($imdbID)
  {
    $movies = Movie::find($imdbID);
    $actors = Actor::find($imdbID);
    $tvshows = Tvshow::find($imdbID);

    if (isset($movies->imdbID) && $imdbID == $movies->imdbID) {

      return redirect()->route('movies.main', ['imdbID' => $imdbID]);
    } elseif (isset($actors->imdbID) && $imdbID == $actors->imdbID) {

      return redirect()->route('actor.main', ['imdbID' => $imdbID]);
    } elseif (isset($tvshows->imdbID) && $imdbID == $tvshows->imdbID) {

      return redirect()->route('tvshows.main', ['imdbID' => $imdbID]);
    }
  }
}

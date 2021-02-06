<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Moviereview;
use App\Models\TvshowReview;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

class ReviewController extends Controller
{
  public function movie_review($imdbID)
  {
    $data = array();
    $data['title'] = request()->title;
    $data['content'] = request()->content;
    $data['userID'] = Auth::user()->id;
    $data['movieimdbID'] = $imdbID;

    DB::table('moviereviews')->insert($data);
    return redirect()->back();
  }
}

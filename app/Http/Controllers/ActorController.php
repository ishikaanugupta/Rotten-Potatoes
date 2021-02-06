<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;


class ActorController extends Controller
{
  public function main($imdbID)
  {


    $actor = Actor::where('imdbID', '=', $imdbID)->first();


    $dataURI = (string)base64_encode($actor->headshot);
    $actor->headshot = $dataURI;

    return view('main.actor', compact('actor'));
  }
}

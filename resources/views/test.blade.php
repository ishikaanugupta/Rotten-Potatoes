@extends('layouts.app')

@section('content')
{{$movie->title}}
{{$movie->metascore}}

/*   if($name='movies')
        {
           $query_m=$table->where('movies.title','=',$search_text)
           return view('test',compact('movie'));
        }
        elseif($name='actors')
        {
         $query_m=$table->where('actors.name','=',$search_text)
         return view('test1',compact('movie'));*/
        }

   /*     if(isset($search_text))
        {
        if($table->where('movies.title','=',$search_text))
        {
         $movie=$table->first();
       //  return view('main.movie',compact('movie'));
        }

        if($table->where('actors.name','=',$search_text))
        {
         $actors=$table->first();
      //   return view('main.actor',compact('actors'));
        }
        }*/

     /*   if(isset($search_text) && $table->where('movies.title','=',$search_text )
           $query->$table->first();

        elseif(isset($search_text) && $table->where('actors.name','=',$search_text )
           $query->$table->first();*/

      //  $movie=$table->where('movies.title','=',$search_text)->first();

     //   return view('main.movie',compact('movie'));
      
     // $actors=Actor::where('title','LIKE','%'.$search_text.'%')->get();
     // return view('main.actor',compact('actors'));
@endsection

// $name=$_POST['selectVal']

/*     $movies = DB::table('movies')
               ->select('title','year','plot','poster','m_imdbID')
               ->where('movies.title','LIKE','%'.$search_text.'%')
               ->whereNull('a_imdbID','name','bio','headshot',
               't_title','t_year','t_plot','t_poster','t_imdbID');
               
      $actors = DB::table('actors')
               ->select('a_imdbID','name','bio','headshot')
               ->where('actors.name','LIKE','%'.$search_text.'%')
               ->whereNull('title','year','plot','poster','m_imdbID',
               't_title','t_year','t_plot','t_poster','t_imdbID');
               

     $tvshows = DB::table('tvshows')
               ->select('t_title','t_year','t_plot','t_poster','t_imdbID')
               ->where('tvshows.t_title','LIKE','%'.$search_text.'%')
               ->whereNull('title','year','plot','poster','m_imdbID',
               'a_imdbID','name','bio','headshot')
               ->unionAll($movies)
               ->unionAll($actors)
               ->first();*/
    
/*   $casts=DB::table('moviescasts')
      ->join('movies', 'moviescasts.movieimdbID', '=', 'movies.m_imdbID')
      ->join('actors', 'moviescasts.castimdbID', '=', 'actors.a_imdbID')
      ->select('moviescasts.*','actors.name','actors.headshot','actors.a_imdbID');

      $actors=$casts->where('movies.m_imdbID','=',$id)->get();

      $movie=Movie::find($id);

      return view('main.movie',compact('movie','actors'));*/

  //    return redirect()->action([MovieController::class, 'main'],['id'=> $id]);
  
//  return redirect()->route('movies.main', ['id' => $id]);

<div class="card bg-transparent">
                    <div class="card-header" id="headingTwo">
                        <div class = "row p-3">
                            <div class="col-lg-2 col-md-4">
                                <div class="d-flex">
                                    <img src="https://www.thisdogslife.co/wp-content/uploads/2019/02/dog-grasshopper.png" 
                                        width = 120 height = 120 alt="" style = "margin: auto;" class="d-flex justify-content-center img-fluid img-thumbnail rounded-circle">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-8 d-flex">
                                <div class = "d-flex flex-column justify-content-start">
                                    <h6 class="">sue_marie says, </h6>
                                    <h4 class="font-weight-bolder">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, voluptates.</h4>
                                    <button class="btn btn-link text-left m-0 p-0" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    read more . . . 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div class="card bg-transparent">
                    <div class="card-header" id="headingThree">
                        <div class = "row p-3">
                            <div class="col-lg-2 col-md-4">
                                <div class="d-flex">
                                    <img src="https://s3.cointelegraph.com/storage/uploads/view/bad02e8b57a64d349aa5eec318298b4b.png" 
                                        width = 120 height = 120 alt="" style = "margin: auto;" class="d-flex justify-content-center img-fluid img-thumbnail rounded-circle">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-8 d-flex">
                                <div class = "d-flex flex-column justify-content-start">
                                    <h6 class="">canine_joe says, </h6>
                                    <h4 class="font-weight-bolder">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, voluptates.</h4>
                                    <button class="btn btn-link text-left m-0 p-0" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    read more . . . 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>


// $movies=Movie::all();


    // $movie=Movie::find($id);

   /*   $movie=DB::table('moviescasts')
     ->join('movies', 'moviescasts.movieimdbID', '=', 'movies.imdbID')
     ->join('actors', 'moviescasts.castimdbID', '=', 'actors.imdbID')
     ->select('moviescasts.*')
     ->where('movies.imdbID','=',$id)
     ->first(); */


     
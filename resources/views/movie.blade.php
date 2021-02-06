@extends('layouts.app')

@section('content')

<div id="content">
    <div class="jumbotron home-spacer" id="products-jumbotron">
        <h1>Your all time favourite movies!</h1>
        <p>The best movies available</p>
    </div>

    <div class="row text-center" id="movies">
        @foreach ($movies as $movie)
        <div class="col-md-3 col-sm-6 home-feature">
            <div class="thumbnail">
                <img src="data:image/png;base64,{{$movie->poster}}" width='200' height='250' alt="Responsive Image">
                <div class="caption">
                    <a href="{{'/movies/'.$movie->imdbID}}">
                        <h3>{{$movie->title}} </h3>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
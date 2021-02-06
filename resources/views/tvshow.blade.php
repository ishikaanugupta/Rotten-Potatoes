@extends('layouts.app')

@section('content')

<div id="content">
    <div class="jumbotron home-spacer" id="products-jumbotron">
        <h1>Your all time favourite TV Shows!</h1>
        <p>The best tvshows available</p>
    </div>

    <div class="row text-center" id="movies">

        @foreach ($tvshows as $tvshow)
        <div class="col-md-3 col-sm-6 home-feature">
            <div class="img-thumbnail">
                <img src="data:image/png;base64,{{$tvshow->poster}}" width='200' height='250' alt="Responsive Image">
                <div class="caption">
                    <a href="{{'/tvshows/'.$tvshow->imdbID}}">
                        <h3>{{$tvshow->title}} </h3>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')


<div class="container" id="content">

    <div class="row align-items-end">
        <div class="col-lg-4 col-md-12 pl-5">
            <img src="data:image/png;base64,{{$movie->poster}}" alt='Responsive Image' width="250" height="340" class="shadow p-0 m-5 rounded" alt="...">
        </div>
        <div class="col-lg-8 col-md-12 pb-5">
            <h1 class="pt-5">{{$movie->title}}</h1>
            <div class="row">
                <h4 class="float-left ml-3 mr-3"><span class="badge badge-warning p-2">Metascore:{{$movie->metascore}}</span></h4>
                <h4 class="float-left mr-3"><span class="badge badge-warning p-2">IMDb:{{$movie->IMDBrating}}</span></h4>
            </div>
        </div>
    </div>


    <div class="jumbotron jumbotron-fluid pl-5 pr-5 rounded" style="margin-top: -12rem; padding-top: 12rem;">
        <div class="row mb-5">
            <div class="col-lg-4 col-md-12">
                <div> <span class="font-weight-bolder"> PLOT: </span>{{$movie->plot}}</div>
                <br>
                <div> <span class="font-weight-bolder"> Awards: </span>{{$movie->awards}}</div>
            </div>
            <div class="col-lg-4 col-md-12">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Rated: {{$movie->rated}}</li>
                    <li class="list-group-item">Released: {{$movie->released}}</li>
                    <li class="list-group-item">Runtime: {{$movie->runtime}}</li>
                    <li class="list-group-item">Genre: {{$movie->genre}}</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Language: {{$movie->language}}</li>
                    <li class="list-group-item">Country: {{$movie->country}}</li>
                    <li class="list-group-item">Director: {{$movie->director}}</li>
                    <li class="list-group-item">Writer: {{$movie->writer}}</li>
                </ul>
            </div>
        </div>

        <hr>
        <h3 class="font-weight-bolder">Cast: </h3>
        <div class="d-flex justify-content-around">
            @foreach($actors as $actor)
            <div class="p-3">
                <img src="data:image/png;base64,{{$actor->headshot}}" alt='Responsive Image' width=160 height=160 class="img-fluid img-thumbnail p-lg-2 p-md-1 shadow rounded-circle">
                <a href="{{'/actors/'.$actor->castimdbID}}" class="btn-block pt-2 p-0 m-0 text-center">{{$actor->name}}</a>
                <p class="p-0 m-0 text-center">plays</p>
                <p class="p-0 m-0 text-center">{{$actor->role}}</p>
            </div>
            @endforeach
        </div>


        <div class="p-5">
            <h3 class="font-weight-bolder">Reviews: </h3>
            <div class="container mb-5">
                <form action="{{ route('movies.review', ['imdbID' => $movies->imdbID]) }}" method="POST">
                    @csrf
                    <label for="basic-url">Write your review: </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Title</span>
                        </div>
                        <input type="text" name="title" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Content</span>
                        </div>
                        <textarea class="form-control" name="content" aria-label="With textarea"></textarea>
                    </div>
                    <div class="pt-4">
                        <div>
                            <h6 class="font-weight-bolder">Your rating: <span>7</span></h6>
                        </div>
                        <div class="progress bg-white">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                    </div>
                    <input class=" mt-3 btn btn-dark btn-md" type="submit" value="submit">
                    <x-alert>
                    </x-alert>
                </form>

            </div>
            <div class="accordion" id="accordionExample">
                @foreach($user as $user)
                <div class="card bg-transparent">
                    <div class="card-header" id="headingOne">
                        <div class="row p-3">
                            <div class="col-lg-2 col-md-4">
                                <div class="d-flex">
                                    <img src="{{$user->avatar}}" width=120 height=120 alt="" style="margin: auto;" class="d-flex justify-content-center img-fluid img-thumbnail rounded-circle">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-8 d-flex">
                                <div class="d-flex flex-column justify-content-start">
                                    <h6 class="">{{$user->name}} says, </h6>
                                    <h4 class="font-weight-bolder">{{$user->title}}</h4>
                                    <button class="btn btn-link text-left m-0 p-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        read more . . .
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            {{$user->content}}
                        </div>
                    </div>
                    @endforeach
                </div>







            </div>
        </div>
    </div>

    @endsection
@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center m-4">
    <div class="d-flex m-3">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4 ">
                    <img src="data:image/png;base64,{{$actor->headshot}}" class="card-img h-100" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title display-4">{{$actor->name}}</h5>
                        <p class="card-text">{{$actor->birthNotes}}</p>
                        <p class="card-text"><small class="text-muted">{{$actor->birthdate}}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron jumbotron-fluid pl-5 pr-5 ml-5 mr-5 rounded" style="margin-top: -12rem; padding-top: 10rem;">
    <blockquote class="blockquote">
        <p class="mb-0">
            {{$actor->trademark}}
        </p>
        <footer class="blockquote-footer"><cite title="Source Title"> Trademarks</cite></footer>
    </blockquote>
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <p class="title">Biography: </p>
            <p class="lead">
                {{$actor->bio}}
            </p>
        </div>
        <div class="col-lg-4 col-md-12">
            <p class="title">Quotes: </p>
            <p class='p-5'>
            <div class="card m-5" style="z-index: 0; position: absolute; top: 0px; left: 0px;">
                <div class="card-body">
                    <div class="card-title">
                        {{$actor->quotes}}
                    </div>
                </div>
            </div>

            <div class="card m-5" style="z-index: 10; position: absolute; top: 10px; left: 10px;">
                <div class="card-body">
                    <div class="card-title">
                        {{$actor->quotes}}
                    </div>
                </div>
            </div>
            <div class="card m-5" style="z-index: 20; position: absolute; top: 20px; left: 20px;">
                <div class="card-body">
                    <div class="card-title">
                        {{$actor->quotes}}
                    </div>
                </div>
            </div>
            <div class="card m-5" style="z-index: 30; position: absolute; top: 30px; left: 30px;">
                <div class="card-body">
                    <div class="card-title">
                        {{$actor->quotes}}
                    </div>
                </div>
            </div>
            </p>
        </div>
    </div>
</div>




@endsection
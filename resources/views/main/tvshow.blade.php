@extends('layouts.app')

@section('content')

<div class="container" id="content">
    <div class="row align-items-end">
        <div class="col-lg-4 col-md-12 pl-5">
            <img src="data:image/png;base64,{{$tvshow->poster}}" width=250 height=340 class="shadow p-0 m-5 rounded" alt="...">
        </div>
        <div class="col-lg-8 col-md-12 pb-5">
            <h1 class="pt-5">{{$tvshow->title}}</h1>
            <div class="row">
                <h4 class="float-left ml-3 mr-3"><span class="badge badge-warning p-2">Seasons:{{$tvshow->seasons}}</span></h4>
                <h4 class="float-left mr-3"><span class="badge badge-warning p-2">IMDb:{{$tvshow->IMDBrating}}</span></h4>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid pl-5 pr-5 rounded" style="margin-top: -12rem; padding-top: 12rem;">
        <div class="row mb-5">
            <div class="col-lg-4 col-md-12">
                <div> <span class="font-weight-bolder"> PLOT: </span>{{$tvshow->plot}}</div>
                <br>
                <div> <span class="font-weight-bolder"> Awards: </span>{{$tvshow->awards}}</div>
            </div>
            <div class="col-lg-4 col-md-12">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Rated: {{$tvshow->rated}}</li>
                    <li class="list-group-item">Released: {{$tvshow->released}}</li>
                    <li class="list-group-item">Runtime: {{$tvshow->runtime}}</li>
                    <li class="list-group-item">Genre: {{$tvshow->genre}}</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Language: {{$tvshow->language}}</li>
                    <li class="list-group-item">Country: {{$tvshow->country}}</li>
                    <li class="list-group-item">Director: {{$tvshow->director}}</li>
                    <li class="list-group-item">Writer: {{$tvshow->writer}}</li>
                </ul>
            </div>
        </div>

        <hr>
        <h3 class="font-weight-bolder">Cast: </h3>
        <div class="d-flex justify-content-around">
            @foreach($actors as $actor)
            <div class="p-3">
                <img src="data:image/png;base64,{{$actor->headshot}}" width=160 height=160 class="img-fluid img-thumbnail p-lg-2 p-md-1 shadow rounded-circle" alt="Responsive Image">
                <a href="{{'/actors/'.$actor->imdbID}}" class="btn-block pt-2 p-0 m-0 text-center">{{$actor->name}}</a>
                <p class="p-0 m-0 text-center">plays</p>
                <p class="p-0 m-0 text-center">{{$actor->role}}</p>
            </div>
            @endforeach
        </div>

        <div class="p-5">
            <h3 class="font-weight-bolder">Reviews: </h3>
            <div class="container mb-5">
                <form action="">
                    <label for="basic-url">Write your review: </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Title</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Content</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="pt-4">
                        <div>
                            <h6 class="font-weight-bolder">Your rating: <span>7</span></h6>
                        </div>
                        <div class="progress bg-white">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                    </div>
                    <input class=" mt-3 btn btn-dark btn-md" type="button" value="submit">
                    <x-alert>
                    </x-alert>
                </form>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card bg-transparent">
                    <div class="card-header" id="headingOne">
                        <div class="row p-3">
                            <div class="col-lg-2 col-md-4">
                                <div class="d-flex">
                                    <img src="https://s3.cointelegraph.com/storage/uploads/view/bad02e8b57a64d349aa5eec318298b4b.png" width=120 height=120 alt="" style="margin: auto;" class="d-flex justify-content-center img-fluid img-thumbnail rounded-circle">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-8 d-flex">
                                <div class="d-flex flex-column justify-content-start">
                                    <h6 class="">canine_joe says, </h6>
                                    <h4 class="font-weight-bolder">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, voluptates.</h4>
                                    <button class="btn btn-link text-left m-0 p-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        read more . . .
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card bg-transparent">
                    <div class="card-header" id="headingTwo">
                        <div class="row p-3">
                            <div class="col-lg-2 col-md-4">
                                <div class="d-flex">
                                    <img src="https://www.thisdogslife.co/wp-content/uploads/2019/02/dog-grasshopper.png" width=120 height=120 alt="" style="margin: auto;" class="d-flex justify-content-center img-fluid img-thumbnail rounded-circle">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-8 d-flex">
                                <div class="d-flex flex-column justify-content-start">
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
                        <div class="row p-3">
                            <div class="col-lg-2 col-md-4">
                                <div class="d-flex">
                                    <img src="https://s3.cointelegraph.com/storage/uploads/view/bad02e8b57a64d349aa5eec318298b4b.png" width=120 height=120 alt="" style="margin: auto;" class="d-flex justify-content-center img-fluid img-thumbnail rounded-circle">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-8 d-flex">
                                <div class="d-flex flex-column justify-content-start">
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
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

    </html>

    @endsection
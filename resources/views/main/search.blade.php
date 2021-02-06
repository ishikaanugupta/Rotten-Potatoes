@extends('layouts.app')

@section('content')


<center>
    @foreach ($table as $table)
    <a href="{{'/'.$table->imdbID}}">{{$table->title}}<br /></a>
    {{$table->plot}}<br />
    {{$table->poster}}<br />
    @endforeach
</center>

@endsection
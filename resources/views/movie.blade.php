@extends('layout.main')
@section('title', 'movies')

@section('content')
    @foreach ($movies as $movie)
        <ul>
            <li>
                {{$movie->title}}
            </li>
            <li>
                {{$movie->nationality}}
            </li>
        </ul>
    @endforeach
@endsection

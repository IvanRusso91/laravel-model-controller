@extends('layout.main')
@section('title', 'movies')

@section('content')
<div class="container scheda">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Data</th>
            <th scope="col">Vote</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                 <tr>
                    <th scope="row">{{ $movie->id }}</th>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->date }}</td>
                    <td>{{ $movie->vote}}</td>
                </tr>
            @endforeach


        </tbody>
      </table>
</div>
@endsection

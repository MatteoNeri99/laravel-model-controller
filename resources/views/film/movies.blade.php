@extends('layouts.app')

@section('main-content')
@foreach ($movies as $movie)

<div class="card">


    <p>
      Titolo:  {{$movie->title}}
    </p>

    <p>
       Titolo originale: {{$movie->original_title}}
    </p>

    <p>
        Voto : {{$movie->vote}}
    </p>

</div>
@endforeach


@endsection

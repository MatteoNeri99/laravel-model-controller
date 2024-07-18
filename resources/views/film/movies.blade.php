@extends('layouts.app')

@section('main-content')

<ul>
    @foreach ($movies as $movie)
    <li>
        <p>
            {{$movie->title}}
        </p>
    </li>

    @endforeach
</ul>


@endsection

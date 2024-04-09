@extends('layouts/app')

@section('content')

<main class="row row-cols-4 d-flex flex-wrap my-5 mx-auto" style="width:1200px;">

    @foreach ($movies as $movie)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">
                    <strong>Titolo originale:</strong> {{ $movie->original_title }}<br>
                    <strong>Nazionalità:</strong> {{ $movie->nationality }}<br>
                    <strong>Data:</strong> {{ $movie->date }}<br>
                    <strong>Voto:</strong> {{ $movie->vote }}
                </p>
            </div>
        </div>
    @endforeach
    

</main>

@endsection
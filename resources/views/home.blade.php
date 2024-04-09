@extends('layouts/app')

@section('content')

<main class="container my-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($movies as $movie)
            <div class="col">
                <div class="card h-100">
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
            </div>
        @endforeach
    </div>
</main>

@endsection

@extends('layouts/app')

@section('content')

<main>

@foreach ($movies as $movie)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
        </div>
    </div>
@endforeach

</main>

@endsection
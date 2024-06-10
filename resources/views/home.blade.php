@extends('layouts.app')

@section('content')
    <h1>Movies List :</h1>
    <div class="container">
        <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
            @foreach ($moviesList as $movie)
                <div class="col-4">
                    <div class="card h-100">
                        <img src="{{ $movie->image }}" alt="">
                        <div class="card-body text-center">
                            <h4>{{ $movie ->title}}</h4>
                            <p><b>{{ $movie ->original_title }}</b></p>
                            <p><i>{{ $movie ->date }}</i></p>
                            <p><i><b>{{ $movie ->vote }}</b></i></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

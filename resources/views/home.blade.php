@extends('layouts.app')

@section('content')
    <h1>Movies List :</h1>
    <div class="container">
        <div class="row">
            <div class="col-4">
                @foreach ($moviesList as $movie)
                    <div class="card">
                        {{ $movie->id}}
                        {{ $movie ->title }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

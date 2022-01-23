@extends('layouts.master')
@section('title', 'Tienda BCN')
@section('content')
    <section class="">
        <div class="container">
            @foreach ($movies as $movie)
                <div class="card m-2" style="max-width: auto;">
                    <div class="row m-2">
                        <div class="">
                            <img src="{{ $movie->image }}" class="img-fluid rounded-start" alt="{{ $movie->image }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">Titulo: {{ $movie->title }}</h3>
                                <p class="card-text">Descripcion: {{ $movie->synopsis }}</p>
                                <p class="card-text">Generos: {{ $movie->genere }}</p>
                                <p class="card-text"><small class="text-muted">Create at: {{ $movie->created_at }}
                                        </br>
                                        Last updated: {{ $movie->updated_at }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="m-2">
                {{ $movies->links() }}
            </div>
        </div>

    </section>
@endsection

@extends('layouts.master')
@section('title', 'Tienda BCN')
@section('content')
<section class="">
    <div class="container">
        @foreach ($movies as $movie)
        <div class="card m-1" style="max-width: auto; max-height:auto;">
            <div class="row m-1">
                <a href="{{ route('movies.show', $movie) }}" class="stretched-link">
                    <div class="">
                        <img src="{{ $movie->image }}" class="img-fluid rounded-start" alt="{{ $movie->image }}"
                            style="max-width: auto; max-height:auto;">
                    </div>
                </a>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Titulo: {{ $movie->title }}</h5>
                        <a class="card-text">Descripcion: {{ $movie->synopsis }}</a><br>
                        <a class="card-text">Generos: {{$generes[$movie->genere]->name}} </a>
                        <small>
                            <p class="card-text">Formato:@if (($movie->type==0))Movie @else Serie @endif </p>
                        </small>
                        <div class="card-text">
                            Price : {{$movie->price}}€
                        </div>
                        <small class="text-muted">
                            <div class="card-text">
                                <a>Update at: {{ $movie->updated_at }} </a>
                                <a>Created at: {{ $movie->created_at }} </a>
                            </div>
                        </small>
                        <a href=""class="btn btn-outline-primary"> Comprar  </a>
                        <a href="" class="btn btn-outline-primary"> Alquilar  </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="m-2">
            {{ $movies->links() }}
        </div>
    </div>
    </div>


</section>
@endsection
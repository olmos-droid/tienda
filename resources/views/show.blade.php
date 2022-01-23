@extends('layouts.master')
@section('title', 'Show Movie')
@section('content')
<section class="">
    <div class="container">

        <h1 class="text-center"> Show movie</h1>
        
        <div class="card m-2" style="max-width: auto;">
            <div class="row m-2">
                <div class="">
                    <img src="{{ $movie->image }}" class="img-fluid rounded-start" alt="{{ $movie->image }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title ">Titulo: {{ $movie->title }}</h3>
                        <p class="card-text">Descripcion: {{ $movie->synopsis }}</p>
                        <p class="card-text">Generos: {{ $movie->genere }}</p>
                        <small class="text-muted">
                            <div class="card-text">
                                <a>Update at: {{ $movie->updated_at }} </a><br>
                                <a>Created at: {{ $movie->created_at }} </a>
                        </small>
        
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
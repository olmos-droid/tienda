@extends('layouts.master')
@section('title', 'Tienda BCN')
@section('content')
<section class="">
    <div class="container">
        <div class="">

            <form action="{{route('movies.index')}}" class="form-inline d-flex justify-content-center" method="post">


                @csrf
                <i class="fas fa-search" aria-hidden="true"></i>
                <div class="form-group">
                    <select class="form-control-sm md-form mt-0 form-sm md-form auto" name="bytype" onchange="submit()">

                        <option value=2 {{ old('bytype')=='0' ? 'selected' : '' }} selected> All </option>
                        <option value=0 {{ old('bytype')=='1' ? 'selected' : '' }}> Movies </option>
                        <option value=1 {{ old('bytype')=='2' ? 'selected' : '' }}> Series </option>

                    </select>
                </div>

                <input class="form-control form-control-sm ml-4 w-10" name="bytitle" type="search"
                    value="{{ old('bytitle') }}" placeholder="Search by title" aria-label="Search">
                <input class="form-control form-control-sm ml-4 w-10" name="bysynopsis" type="search"
                    value="{{ old('bysynopsis') }}" placeholder="Search by synopsis" aria-label="Search">
                <input class="form-control form-control-sm ml-4 w-10" name="byyear" type="number"
                    value="{{ old('byyear') }}" placeholder="Search by year" aria-label="Search">
                <input class="form-control form-control-sm ml-4 w-10" name="byduration" type="number"
                    value="{{ old('byduration') }}" placeholder="Search by duration" aria-label="Search">
                <!-- <input class="form-control form-control-sm ml-4 w-10" name="bygenere" type="number" value="{{ old('bygenere') }}" placeholder="Search by genere" aria-label="Search"> -->
                <button class="btn btm-outline-success my-2 mysm-0" type="submit">
                    {{--
                    <!-- icono lupa --> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search m-1  " viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </form>
        </div>
        @foreach ($movies as $movie)

        @csrf
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
                        <a class="card-text">Generos: {{$movie->genere}} </a>
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
                        <a href="{{ route('movies.getAddToCart', $movie) }}" class="btn btn-outline-primary"> Comprar </a>
                        {{-- <a href="{{ route('movies.show', $movie) }}" class="btn btn-outline-primary"> Alquilar </a> --}}
                    </div>
                </div>
            </div>
        </div>

        @endforeach
        <div class="m-2">
        </div>
    </div>
    </div>


</section>
@endsection
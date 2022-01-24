@extends('layouts.master')
@section('title', 'Create Movie')
@section('content')
<section class="">
    <div class="container">

        <h1> Crear Item</h1>
        <form action="{{route('movies.create')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="">
                    <label for="synopsis">
                        <input class="form-control" type="text" name="title" placeholder="Title" value="{{old('name')}}">
                    </label>
                </div>
                <div class="">
                    <label for="synopsis">
                        <textarea class="form-control" type="text" cols="30" rows="10" name="synopsis" placeholder="add text" value={{old('synopsis')}}></textarea>
                    </label>
                </div>
                <div class="row ">

                    <div class="col">
                        <label for="type">
                            <select class="form-control" name="type" id="type">
                                <option selected disabled="">Type</option>
                                <option value="0">Movie</option>
                                <option value="1">Serie</option>
                            </select>
                        </label>
                    </div>
                    <div class="col">
                        <label for="genere">
                            <select class="form-control" name="genere" id="genere">
                                <option selected disabled>Genere</option>
                                @foreach ($generes as $genere)
                                <option value="{{$genere->id}}">{{$genere->name}}</option>
                                
                                @endforeach

                            </select>
                        </label>
                    </div>
                    <div class="form-group mb-4 col">
                        <label for="duration">
                            <input class="form-control col-4" type="number" name="duration" id="duration" placeholder="time">
                        </label>

                    </div>
                    <div class="form-group mb-4 col">
                        <label for="year">
                            <input class="form-control col-4" type="number" name="year" id="year" placeholder="year">
                        </label>
                    </div>
                    <div class="form-group mb-4 col">
                        <label for="price">
                            <input class="form-control col-4" type="number" name="price" id="price" placeholder="price">
                        </label>
                    </div>
                </div>
                <label for="formFileSm" class="form-label">Image Path</label>
                <input class="form-control" id="formFileSm" type="file" name="image" />
                <label for="formFileSm" class="form-label">Film Path</label>
                <input class="form-control" id="formFileSm" type="file" id="file" name="file" />
            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit">Store Data</button>
            </div>
        </form>

    </div>
</section>
@endsection
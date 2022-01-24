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
                        <input class="form-control" type="text" name="title" placeholder="Title"
                            value="{{old('title')}}">
                    </label>
                    @error('title')
                    <br><small>{{$message}}</small><br>
                    @enderror
                </div>
                <div class="">
                    <label for="synopsis">
                        <textarea class="form-control" type="text" cols="30" rows="10" name="synopsis"
                            placeholder="add text">{{old('synopsis')}}</textarea>
                    </label>
                    @error('synopsis')
                    <br><small>{{$message}}</small><br>
                    @enderror
                </div>
                <div class="row ">
                    <div class="form-group col">
                        <label for="type">
                            <select class="form-control col" name="type" id="type">
                                <option selected disabled="">Type</option>
                                <option value=0 {{ old('type')=='0' ? 'selected' : '' }}> Movies </option>
                                <option value=1 {{ old('type')=='1' ? 'selected' : '' }}> Series </option>
                            </select>
                        </label>
                        @error('type')
                        <br>
                        {{-- <div class="alert alert-danger" role="alert"> --}}
                            <small class="alert alert-danger">{{$message}}</small>
                            {{--
                        </div> --}}
                        <br>
                        @enderror
                    </div>
                    <div class="form-group mb-8 col">
                        <label for="genere">
                            <select class="form-control col-8" name="genere" id="genere">
                                <option selected disabled>Genere</option>
                                @foreach ($generes as $genere)
                                <option value="{{$genere->id}}">{{$genere->name}}</option>
                                @endforeach
                            </select>
                        </label>
                        @error('genere')
                        <br>
                        <small>{{$message}}</small>
                        <br>
                        @enderror
                    </div>

                    <div class="form-group mb-8 col">
                        <label for="duration">
                            <input class="form-control col-8" type="number" name="duration" id="duration"
                                placeholder="time">
                        </label>
                        @error('duration')
                        <br>
                        <small>{{$message}}</small>
                        <br>
                        @enderror
                    </div>
                    <div class="form-group mb-8 col">
                        <label for="year">
                            <input class="form-control col-8" type="number" name="year" id="year" placeholder="year">
                        </label>
                        @error('year')
                        <br>
                        <small>{{$message}}</small>
                        <br>
                        @enderror
                    </div>
                    <div class="form-group mb-4 col">
                        <label for="price">
                            <input class="form-control col-8" type="number" name="price" id="price" placeholder="price">
                        </label>
                        @error('price')
                        <br>
                        <small>{{$message}}</small>
                        <br>
                        @enderror
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
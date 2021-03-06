<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartMovieRequest;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genere;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //metodo old
        $request->flash();
        // index o tambien lista
        $movies = Movie::all();
        $generes = Genere::all();
        if ($request->bytype != '' || $request->bytype != 0) {
            $movies = Movie::title("%$request->bytitle%")-> synopsis("%$request->bysynopsis%")
                ->year("%$request->byyear%")
                ->duration("%$request->byduration%")
                ->type("$request->bytype")->get();
            
            dump($movies);
        }

        // if ($request->bytype != '' || $request->bytype != 0) {
        //     $movies = Movie::title("%$request->bytitle%")
            // ->synopsis("%$request->bysynopsis%")
            // ->year("%$request->byyear%")
            // ->duration("%$request->byduration%")
            // ->type("$request->bytype")
        //     ->get();
        // } else {
        // }
        
        return view('home')->with('movies', $movies)->with('generes', $generes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $generes = Genere::all();
        return view('create')->with('generes', $generes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMovieRequest $request)
    {
        // $movie = new Movie();
        // $movie->title = $request->title;
        // $movie->synopsis = $request->synopsis;
        // $movie->type = $request->type;
        // $movie->genere = $request->genere;
        // $movie->duration = $request->duration;
        // $movie->year = $request->year;
        // $movie->price = $request->price;
        // $movie->image = $request->image;
        // $movie->file = $request->file;
        // $movie->save();

        //assignacion massiva nos ahorramos el save y le pasamos todos los valores del request
        // dump($request->all());
        $movie = Movie::create($request->all());
        return redirect(route('movies.show', $movie));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
        $generes = Genere::all();
        return view('show')->with('movie', $movie)->with('generes', $generes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $generes = Genere::all();
        return view('edit')->with('movie', $movie)->with('generes', $generes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMovieRequest  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {

        $movie->title = $request->title;
        $movie->synopsis = $request->synopsis;
        $movie->type = $request->type;
        $movie->genere = $request->genere;
        $movie->duration = $request->duration;
        $movie->year = $request->year;
        $movie->price = $request->price;
        $movie->image = $request->image;
        $movie->file = $request->file;

        $movie->save();

        return redirect(route('movies.show', $movie));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}

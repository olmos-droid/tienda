<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenereVsMovieRequest;
use App\Http\Requests\UpdateGenereVsMovieRequest;
use App\Models\GenereVsMovie;

class GenereVsMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenereVsMovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenereVsMovieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GenereVsMovie  $genereVsMovie
     * @return \Illuminate\Http\Response
     */
    public function show(GenereVsMovie $genereVsMovie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenereVsMovie  $genereVsMovie
     * @return \Illuminate\Http\Response
     */
    public function edit(GenereVsMovie $genereVsMovie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenereVsMovieRequest  $request
     * @param  \App\Models\GenereVsMovie  $genereVsMovie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenereVsMovieRequest $request, GenereVsMovie $genereVsMovie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenereVsMovie  $genereVsMovie
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenereVsMovie $genereVsMovie)
    {
        //
    }
}

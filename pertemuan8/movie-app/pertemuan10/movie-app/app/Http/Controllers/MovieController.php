<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller {
    public function index() 
    {
        $movies = movie::all();

        return view("movies.index", compact('movies'));
    }
    /**p
     * Show the form creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }
    /**
     * Store a newly created resource in storage
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'negara' => 'required',
            'tahun' => 'required|integer',
            'rating' => 'required|numeric',
        ]);

        Movie::create($validateData);

        return redirect('/movies')->with('success', 'movie addad successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect('/movies')->with('success', 'movie deleted successfully');
    }
}
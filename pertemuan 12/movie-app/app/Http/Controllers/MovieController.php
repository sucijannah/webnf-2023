<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller {
    public function index() 
    {
        $movies = Movie::all();
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

        if($request->hasFile('poster')) {
            //set image name
            $extension = $request->file('poster')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;

            //save to publinc
            $request->file('poster')->storeAs('assets/img', $imageName, 'public');
            $validateData['poster'] = $imageName;
        }

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
        $genres = Genre::all();
        return view('movies.edit', compact('movie','genres'));
    }

    /**
     * update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validateData = $request->validate([
            'judul' => 'required',
            'poster' => 'required',
            'genre_id' => 'required',
            'negara' => 'required',
            'tahun' => 'required|integer',
            'rating' => 'required|numeric',
        ]);

        if($request->hasFile('poster')) {
            //Delete old image
            Storage::disk('public')->delete('assets/img/' . $movie->poster);

            //upload new image
            //set image nama
            $extension = $request->file('poster')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;

            //save to folder piblic
            $request->file('poster')->storeAs('assets/img', $imageName, 'public');
            $validateData['poster'] = $imageName;
        }

        $movie->update($validateData);
        return redirect('/movies')->with('success', 'Data berhasil di-update');

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
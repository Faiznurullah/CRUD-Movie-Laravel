<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movie;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::All();
        return view('movies.index', ['movies' => $movies ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required',
            'genre' => 'required',
            'year' => 'required'
        ]);
       

        Movie::create([

            'title' => $request->title,
            'description' => $request->description,
            'genre' => $request->genre,
            'year' => $request->rilis

        ]);

        return redirect('/movie')->with('status', 'Data Sukses Terkirim');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required',
            'genre' => 'required',
            'year' => 'required'
        ]);
        
        Movie::where('id', $movie->id)
        ->update([
            'title' => $request->title,
            'genre' => $request->genre,
            'description' => $request->description,
            'year' => $request->rilis
        ]);

        return redirect('/movie')->with('status', 'Data Sukses Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
       Movie::destroy($movie->id);
       return redirect('/movie')->with('status', 'Data Sukses Dihapus');
    }
}

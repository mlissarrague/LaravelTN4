<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function create()
    {
    	return view('form');
    }

    public function store()
    {
    	request()->validate([
    		'title' => 'required',
    		'awards' => 'required|int',
    		'rating' => 'required',
    	]);


    	return view('movie', [
    		'message' => 'Pelicula creada',
    		'movie' => Movie::create(request()->except('_token'))
    	]);
    }

    public function edit()
    {
        return view('edit', [
            'movie' => Movie::find(request()->id)
        ]);
    }

    public function update()
    {

        request()->validate([
            'title' => 'required',
            'awards' => 'required|int',
            'rating' => 'required',
        ]);


        $movie = Movie::find(request()->id);

        $movie->update(request()->all());        

        dd($movie->fresh());
    }


    public function delete()
    {

        $movie = Movie::find(request()->id);

        return view('delete', [
            'movie' => Movie::find(request()->id)
        ]);
    }


    public function destroy()
    {

        $movie = Movie::find(request()->id);

        dd($movie);

        $movie->delete();

        return "eliminado";
    }
}

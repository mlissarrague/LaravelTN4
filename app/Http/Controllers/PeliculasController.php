<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
use App\Genre;

class PeliculasController extends Controller
{
    public function index()
    {

    	$peliculas = Movie::all();

    	return view('peliculas', [
    		'lista' => $peliculas
    	]);
    }

    public function create ()
    {
		return view('new-movie', [
			'genres' => Genre::all()
		]);
	}



	public function store()
	{
		request()->validate([
			'title' => 'required'
		]);

		// if valid ?

		$movie = Movie::create(request()->all());

		dd($movie);


	}
}

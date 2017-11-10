<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function index()
    {

    	$list = Actor::paginate(5);


    	return view('actors-view')
    		->with('actores_lista', $list);

    }
}

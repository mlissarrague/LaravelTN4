<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function list()
    {

    	dd(request()->test);

    	$list = Actor::all();

    	return view('actors-view')
    		->with('actores_lista', $list);

    }
}

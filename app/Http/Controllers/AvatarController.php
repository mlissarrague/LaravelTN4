<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function create()
    {
    	return view('avatar-create');
    }


    public function store()
    {

    	$file = request()->file('avatar');


    	// 12134234134.jpg
    	$name = time() . "." . $file->extension();
    	//$path = $file->storePubliclyAs($folder, $name);

    	$path = $file->storePubliclyAs('', $name);

    	dd($path);

    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];

    public function prueba()
    {
    	return "hola";
    }

    public function genre()
    {
    	return $this->belongsTo(Genre::class);
    }
}

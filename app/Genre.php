<?php

namespace App;

use App\Movie;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $guarded = [];


    public function movies()
    {
    	return $this->hasMany(Movie::class);
    }
}

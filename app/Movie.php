<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

	protected $table = "movies";

    protected $guarded = [];


    protected $dates = ['created_at', 'updated_at', 'release_date'];

    public function actors()
    {
    	return $this->belongsToMany(Actor::class);
    }
}

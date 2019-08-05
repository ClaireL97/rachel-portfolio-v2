<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    //Relationships
    public function tags()
    {
    	return $this->morphToMany('App\Models\Tag', 'taggable');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}

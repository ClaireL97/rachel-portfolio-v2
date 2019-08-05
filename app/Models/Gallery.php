<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //Relationships
    public function tags()
    {
    	return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Relationships
    public function arts()
    {
    	return $this->morphedByMany('App\Models\Art', 'taggable');
    }

    public function galleries()
    {
    	return $this->morphedByMany('App\Models\Gallery', 'taggable');
    }
}

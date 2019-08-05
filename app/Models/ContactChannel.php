<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactChannel extends Model
{
    //Relationships
    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}

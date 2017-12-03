<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolUser extends Model
{
	protected $guarded = [];

    public function school()
    {
    	return $this->belongsTo('App\Models\School');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}

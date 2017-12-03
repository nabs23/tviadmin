<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
	protected $guarded = [];

    public function users()
    {
    	return $this->hasManyThrough('App\Models\User', 'App\Models\SchoolUser');
    }

}

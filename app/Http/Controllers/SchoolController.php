<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolClassification;
use App\Models\SchoolType;
use App\Models\School;
use App\Models\SchoolUser;
use App\Models\Province;
use DB;

class SchoolController extends Controller
{
    public function create()
    {
    	$data['classifications'] =  SchoolClassification::all();
    	$data['types'] = SchoolType::all();
    	$data['provinces'] = Province::all();
    	return view('schools.create', compact('data'));
    }

    public function store(Request $request)
    {
    	$request->validate([
    	    'name' => 'required|max:320',
    	    'short_name' => 'required|max:16',
    	    'type_id' => 'required|',
    	    'classification_id' => 'required',
    	    'province_id' => 'required',
    	]);

    	DB::transaction(function() use ($request) {
    		$school = School::create(
    			$request->only(
    				['name', 'short_name', 'type_id', 'classification_id', 'province_id']
    			));

    		$school_user = SchoolUser::create(
    			['school_id' => $school->id, 'user_id' => auth()->id(), 'role' => 'Admin']
    		)->save();
    	});

    	return redirect('/');
    }
}

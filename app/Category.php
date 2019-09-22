<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Category extends Model
{
    protected $table = "categories";
	protected $fillable  = [
        'name_ar',
        'name_en',
        'meta_tags',
        'parent_id',
        'icon'
		
	];
	 
	public function setIconAttribute($icon)
	{
		if (Input::hasFile('icon')) {
			//time 
			$time = time();
			// get file extention
			$ext  =Input::file('icon')->getClientOriginalExtension();
			//make name as time and extention
			$fullname = $time . '.' . $ext;
			//uplode image to path
			Input::file('icon')->move(public_path() .'/uploads/images/categories', $fullname);
			//get image with path
			$path ='/uploads/images/categories';
			//upload to thumb path
            // save image name to data base
			$this->attributes['icon'] =$path.'/'.$fullname;
		}
	}

	public function category()
	{
		return $this->belongsTo('App\Category','parent_id');
	}
}

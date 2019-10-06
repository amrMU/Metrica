<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pages extends Model
{
    use SoftDeletes;
    protected $table = "pages";
    protected $fillable = [
        'title_ar',
        'title_en',
        'url',
        'meta_tags',
        'icon',
        'content_ar',
        'content_en',
        'status',
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
            Input::file('icon')->move(public_path() .'/uploads/images/pages', $fullname);
            //get image with path
            $path ='/uploads/images/pages';
            //upload to thumb path
            // save image name to data base
            $this->attributes['icon'] =$path.'/'.$fullname;
        }
    }
}

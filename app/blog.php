<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\SoftDeletes;

class blog extends Model
{
    use SoftDeletes;
    protected $table = "blogs";
    protected $fillable  = [
                        'title_ar',
                        'title_en',
                        'url',
                        'meta_tags',
                        'image',
                        'content_ar',
                        'content_en',
                        'status',
                            ];

    public function setUrlAttribute($url)
    {
        // dd($url);
        return  $this->attributes['url'] = str_replace(' ', '_', $url);
        // dd($this->attributes['url']);
        // $this->attributes['url'] = strtolower($value);
    }
    public function setImageAttribute($icon)
    {
        if (Input::hasFile('image')) {
            //time 
            $time = time();
            // get file extention
            $ext  =Input::file('image')->getClientOriginalExtension();
            //make name as time and extention
            $fullname = $time . '.' . $ext;
            //uplode image to path
            Input::file('image')->move(public_path() .'/uploads/images/blogs', $fullname);
            //get image with path
            $path ='/uploads/images/blogs';
            //upload to thumb path
            // save image name to data base
            $this->attributes['image'] =$path.'/'.$fullname;
        }
    }
}

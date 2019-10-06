<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Input;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'fname',
    'lname',
    'email',
    'email_verified_at',
    'phone',
    'address',
    'lat',
    'long',
    'city_id',
    'gander',
    'type_user',
    'status',
    'suspended_reason',
    'deactive_reason',
    'image',
    'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setImageAttribute($image)
	{
		if (Input::hasFile('image')) {
			//time 
			$time = time();
			// get file extention
			$ext  =Input::file('image')->getClientOriginalExtension();
			//make name as time and extention
			$fullname = $time . '.' . $ext;
			//uplode image to path
			Input::file('image')->move(public_path() .'/uploads/images/users', $fullname);
			//get image with path
			$path ='/uploads/images/users';
			//upload to thumb path

            // save image name to data base
			$this->attributes['image'] =$path.'/'.$fullname;
		}

	}
    public function reports()
    {
    return $this->hasMany('App\Report','user_id','id');
    }

    public function last_report()
    {
    return $this->reports()->orderBy('created_at','DESC')->first();
    }

    public function city()
    {
    return $this->belongsTo('App\City','city_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingSocialMedia extends Model
{
	use SoftDeletes;
	
	protected $table = "setting_social_media";
    protected $fillable = [
	    'setting_id',
	    'name_ar',
	    'name_en',
	    'icon',
	    'url',
    ];
}

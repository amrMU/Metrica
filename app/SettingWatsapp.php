<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingWatsapp extends Model
{
	use SoftDeletes;
	
	protected $table = "setting_watsapps";
    protected $fillable = [
	    'setting_id',
	    'whatsapp',
	  
    ];
}

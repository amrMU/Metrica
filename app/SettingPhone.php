<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingPhone extends Model
{
	use SoftDeletes;
	protected $table = "setting_phones";
    protected $fillable = [
	    'setting_id',
	    'phone'
    ];
}

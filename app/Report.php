<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "reports";
    protected $fillable = [
    	'key',
    	'text',
    	'process',
    	'user_id',
    	'ip',
    	'location',
    	'browser',
    	'hostname',
    ];
}

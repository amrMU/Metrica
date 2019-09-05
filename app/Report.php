<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;
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

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}

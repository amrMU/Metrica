<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use SoftDeletes;
    protected $table = 'settings';
    protected $fillable = [
            'title_ar',
            'title_en',
            'description_ar',
            'description_en',
            'meta_tags',
            'lat_location',
            'long_location',
            'extirnal_code',
    ];

}

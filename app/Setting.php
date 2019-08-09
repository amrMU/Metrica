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
            'content_ar',
            'content_en',
            'logo',
            'meta_tags',
            'extirnal_code',
            'created_by'
    ];

}

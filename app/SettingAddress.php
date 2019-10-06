<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingAddress extends Model
{
    use SoftDeletes;
    protected $table = 'setting_addresses';
    protected $fillable = [
            'address_ar',
            'address_en',
            'setting_id'
    ];

    
}

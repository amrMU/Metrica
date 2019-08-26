<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingEmail extends Model
{

    use SoftDeletes;
    protected $table = "setting_emails";
    protected $fillable = [
        'email',
        'setting_id',
        'department'
    ];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExternalResources extends Model
{
    protected $table = 'external_resources';
    protected $fillable = ['file','setting_id'];
}

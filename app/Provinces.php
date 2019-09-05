<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    protected $table = "sa_provinces";
    protected $fillable = [
        'nameAr','nameEn'
    ];

    public function cities()
    {
        return $this->hasmany('App\City','provinceId');
    }
    
}

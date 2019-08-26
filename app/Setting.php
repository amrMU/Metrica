<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use URL;
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

    // public function getLogoAttribute()
    // {
    //     return $this->attributes['logo'] = url('/uploads/images/logos'.'/'.str_replace( ' ','_',$this->attributes['title_en']).'/org').'/'.$this->attributes['logo'];

    // }

    public function mail_provider_info()
    {
        return $this->belongsTo('App\SettingMailProviderInfo','id','setting_id');
    }

    public function emails()
    {
        return $this->hasMany('App\SettingEmail','setting_id','id');
    }

    public function address()
    {
        return $this->hasMany('App\SettingAddress','setting_id','id');
    }

    public function phones()
    {
        return $this->hasMany('App\SettingPhone','setting_id','id');
    }

    public function whatsapp()
    {
        return $this->hasMany('App\SettingWatsapp','setting_id','id');
    }

    public function social_media_link()
    {
        return $this->hasMany('App\SettingSocialMedia','setting_id','id');
    }

    public function external_resources()
    {
        return $this->hasMany('App\ExternalResources','setting_id','id');
    }

    
}

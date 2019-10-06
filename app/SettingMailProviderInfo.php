<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingMailProviderInfo extends Model
{
	use SoftDeletes;

	protected $table = "setting_mail_provider_infos";
    protected $fillable = [
	    'setting_id',
	    'MAIL_DRIVER',
	    'MAIL_HOST',
	    'MAIL_USERNAME',
	    'MAIL_PASSWORD',
	    'MAIL_port',
    ];

}

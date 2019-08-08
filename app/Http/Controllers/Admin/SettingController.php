<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingController extends Controller
{
	public $view = 'dashboard';

    public function __construct(Setting $setting)
	{
		$this->setting = $setting;
	}	

	public function create()
	{
		return view($this->view.'.setting.update');
	}
}

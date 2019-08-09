<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use App\Http\Requests\Admin\SettingsRequest;
use App\Helpers\DoFire;
use App\Setting;
use Auth;
use Session;
class SettingController extends Controller
{
	public $view = 'dashboard';

    public function __construct(Setting $setting)
	{
		$this->setting = $setting;
	}	

	public function create(SettingsRequest $request)
	{
        $agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_browse_setting','text'=>'Browse Setting','browser'=>$agent];

        DoFire::MK_REPORT($data,Auth::id(),null,$request->ipinfo);

		return view($this->view.'.setting.update');
	}

	public function store(SettingsRequest $request)
	{

        if ($this->setting->count() > 0 ) {
		$action = SettingProgressController::update($request->all(),$this->setting);
        }else{
		$action = SettingProgressController::create($request->all(),$this->setting);
        }

        $agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_update_setting','text'=>'Update Setting Info','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),$this->setting->first(),$request->ipinfo);

        Session::flash('success',trans('home.message_success'));
        return redirect()->back();
	}

}

<?php
/*
*********************************
* Name: Amr Muhamed             *
* Email: amrmuhamed9@gmail.com  *
* Phone: +201061637022          *
* Copywrits @amrMU Githup       *
* *******************************
*/
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use App\Http\Requests\Admin\SettingsRequest;
use App\Setting,App\ExternalResources;
use App\Helpers\DoFire;
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
        $info = $this->setting->first();
        // dd($info);
        DoFire::MK_REPORT($data,Auth::id(),null,$request->ipinfo);
		return view($this->view.'.setting.update',compact('info'));
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
    
    public function delete_external_file($id,Request $request)
    {
        ExternalResources::destroy($id);

        $agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_delete_external_file','text'=>'Delete External File','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),$this->setting->first(),$request->ipinfo);

        Session::flash('success',trans('home.message_success'));
        return redirect()->back();
    }

}

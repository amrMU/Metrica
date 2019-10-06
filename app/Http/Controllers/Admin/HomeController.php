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
use App\Report,App\User;
use Jenssegers\Agent\Agent;
use App\Helpers\DoFire;
use Auth;
class HomeController extends Controller
{
	public function __construct(Report $report,User $user)
	{
		$this->report = $report;
		$this->user = $user;
	}	
	public $view = 'dashboard';

    public function index(Request $request)
    {
    	$active_users = $this->report->groupBy('user_id')->whereIn('key',['dashboard_user_login'])->get();
		$users = $this->user->whereHas('reports')->with('reports')->take('10')->get();//user has reports to get user browsing info
		$agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
		$data = ['key'=>'dashboard_home_browse','text'=>'Browse Home','browser'=>$agent];
		DoFire::MK_REPORT($data,Auth::id(),null,$request->ipinfo);
		
    	return view($this->view.'.index',compact('active_users','users'));
    }
}

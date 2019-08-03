<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Report,App\User;

class HomeController extends Controller
{
	public function __construct(Report $report,User $user)
	{
		$this->report = $report;
		$this->user = $user;
	}	
	public $view = 'dashboard';

    public function index()
    {
    	$active_users = $this->report->groupBy('user_id')->whereIn('key',['dashboard_user_login'])->get();
    	$users = $this->user->whereHas('reports')->with('reports')->take('10')->get();//user has reports to get user browsing info
    	return view($this->view.'.index',compact('active_users','users'));
    }
}

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
use Session;
class ReportsController extends Controller
{
    public function __construct(Report $report,User $user)
	{
		$this->report = $report;
		$this->user = $user;
	

	}	

	public $view = 'dashboard';

	public function GetBrowsingInfo()
	{
		$reports = $this->user->whereHas('reports')->with('reports')->take('10')->get();//user has reports to get user browsing info
		return view($this->view.'.reports.show',compact('reports'));
	}

	public function getUserBrowseInfo($user_id)
	{
		$reports = $this->report->where('user_id',$user_id)->orderby('created_at','DESC')->paginate(30);
		return view($this->view.'.reports.show_user_reports',compact('reports'));		
	}

	public function delete_reports($report_id)
	{
		$this->report->destroy($report_id);
        Session::flash('success',trans('home.message_success'));
		return redirect()->back();
	}
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Report;

class ReportsController extends Controller
{
    public function __construct(Report $report)
	{
		$this->report = $report;
	}	

	public $view = 'dashboard';

	public function GetBrowsingInfo()
	{
		return view($this->view.'.reports.show');
	}

}

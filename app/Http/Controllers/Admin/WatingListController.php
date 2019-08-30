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
use App\Helpers\DoFire;
use App\WaitingList;
use Auth;
use Session;    

class WatingListController extends Controller
{
    public $view = 'dashboard.wating_list';
    
    public function __construct(WaitingList $list)
	{
		$this->list = $list;
	}	

    public function index(Request $request)
    {
        $lists = $this->list->with('address_info')->orderBy('created_at','DESC')->paginate(10);
        $agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_browse_wating_list','text'=>'Waiting List','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),$lists,$request->ipinfo);

        return view($this->view.'.index',compact('lists'));
    }


    public function saarch(Request $request)
    {

        $keyword = $request->keyword;
        $is_user = $request->is_user ?  'true' : 'false';
        $is_company = $request->is_company ?  'true' : 'false';
        $all = ['keyword'=>$keyword,'is_user'=>$is_user,'is_company'=>$is_company];

        $lists =$this->list->search($all)->orderBy('created_at','DESC')->paginate(30);
        $data_report= ['search_keys'=>$all,'search_result'=>$lists];
        $agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_search_in_wating_list','text'=>'Search In Wating List','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),$data_report,$request->ipinfo);

        return view($this->view.'.index',compact('lists'));
    }

    public function destroy($id,Request $request)
    {
        $list = $this->list->find($id);
        $agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_browse_wating_list_delete','text'=>'Waiting List remove one','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),$list,$request->ipinfo);

        $this->list->destroy($id);
        Session::flash('success',trans('home.message_success'));
        return redirect()->back();
    }
}

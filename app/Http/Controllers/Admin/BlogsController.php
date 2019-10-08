<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use App\Helpers\DoFire;
use App\Http\Requests\Admin\BlogRequest;
use App\Blog;
use Session;
use Auth;

class BlogsController extends Controller
{
	public $view = 'dashboard';
    
    public function __construct(Blog $blog,BlogRequest $request)
	{
        $this->blog = $blog;
        $this->request = $request;
	}	    

	public function index()
	{
		$blogs = $this->blog->paginate(30);
		// dd($blogs);
		$agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_List_Blogs_Article','text'=>'List Blogs Article  ','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),null,$this->request->ipinfo);

        return view($this->view.'.blogs.index',compact('blogs'));

	}
   
    public function create()
    {
    	$agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_create_blog','text'=>'Create Article  ','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),null,$this->request->ipinfo);
        return view($this->view.'.blogs.create');
    }

    public function store()
    {
    	$create = $this->blog->create($this->request->all());
    	$agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_List_Blogs_Article','text'=>'List Blogs Article  ','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),$create,$this->request->ipinfo);
    
    	Session::flash('success',trans('home.message_success'));
    	return redirect()->back();

    }

    public function edit($id)
    {
    	$info = $this->blog->find($id);
    	$agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_update_article_id_'.$id,'text'=>'update Article Info ','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),null,$this->request->ipinfo);
        return view($this->view.'.blogs.edit',compact('info'));
    }

    public function update($id)
    {
    	$update = $this->blog->find($id)->update($this->request->all());
    	$agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_List_Blogs_Article','text'=>'List Blogs Article  ','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),$create,$this->request->ipinfo);
    
    	Session::flash('success',trans('home.message_success'));
    	return redirect()->back();

    }
}

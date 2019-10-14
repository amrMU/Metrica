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

    public function __construct(
			Blog $blog
		)
	{
        $this->blog = $blog;
	}

	public function index(Request $request)
	{
		$blogs = $this->blog->paginate(30);
		// dd($blogs);
		$agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_List_Blogs_Article','text'=>'List Blogs Article  ','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),null,$request->ipinfo);

        return view($this->view.'.blogs.index',compact('blogs'));

	}

    public function create(Request $request)
    {
    		$agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_create_blog','text'=>'Create Article  ','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),null,$request->ipinfo);
        return view($this->view.'.blogs.create');
    }

    public function store(BlogRequest $request)
    {
    	$create = $this->blog->create($request->all());
    	$agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_List_Blogs_Article','text'=>'List Blogs Article  ','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),$create,$request->ipinfo);

    	Session::flash('success',trans('home.message_success'));
    	return redirect()->back();

    }

    public function edit($id,Request $request)
    {
    		$info = $this->blog->find($id);
    		$agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_update_article_id_'.$id,'text'=>'update Article Info ','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),null,$request->ipinfo);
        return view($this->view.'.blogs.edit',compact('info'));
    }

    public function update($id,BlogRequest $request)
    {
    		$update = $this->blog->find($id)->update($request->all());
    		$agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_update_article','text'=>'Update Blogs Article  ','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),$this->blog->find($id),$request->ipinfo);

    	Session::flash('success',trans('home.message_success'));
    	return redirect()->back();

    }

		public function show($value='')
		{
			// code...
		}

		public function search(Request $request)
		{
			$key = $request->key;
			$blogs = $this->blog->where('title_ar',$request->key)
															->orWhere('title_en',$request->key)
															->orWhere('content_ar',$request->key)
															->orWhere('content_en',$request->key)
															->paginate(30);

			return view($this->view.'.blogs.index',compact('blogs','key'));
		}

		public function destroy($id,Request $request)
		{
			$agent = new Agent();
			$agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
			$data = ['key'=>'dashboard_Delete_Article_has_ID:'.$id,'text'=>'Delete Article Blogs','browser'=>$agent];
			DoFire::MK_REPORT($data,Auth::id(),$this->blog->find($id),$request->ipinfo);
			$this->blog->destroy($id);
			Session::flash('success',trans('home.message_success'));
			return redirect()->back();
		}
}

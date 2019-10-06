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
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\Admin\UserRequest;
use Jenssegers\Agent\Agent;
use App\Helpers\DoFire;
use App\Exports\UsersListExport;
use App\User;
use Session;
use DB;
use Auth;

class UsersController extends Controller
{
    public $view = 'dashboard.users';
    
    public function __construct(User $user)
	{
		$this->user = $user;
    }	
    

    public function ExportExelSheet(Request $request)
    {
        $lists = DB::table('users')
                    ->join('cities', 'users.city_id', '=', 'cities.id')
                    ->select(
                        'users.id',
                        'users.fname',
                        'users.lname',
                        'users.email',
                        'cities.nameAr',
                        'cities.nameEn',
                        'users.gander',
                        'users.phone'
                    )->get();
                    // dd($lists);
        $agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_export_users_list','text'=>'Export Users List','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),$lists,$request->ipinfo);

        return  Excel::download(new UsersListExport,'users_list.xlsx');
    }

    public function index(Request $request)
    {
        $users = $this->user->with('city')->paginate(30);
        $agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_browse_users_list','text'=>'browse User','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),null,$request->ipinfo);


        return view($this->view.'.index',compact('users'));
    }

    public function create(Request $request)
    {
        $agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_browse_create_user','text'=>'Brwose Create  User','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),null,$request->ipinfo);

        return view($this->view.'.create');
        
    }

    public function store(UserRequest $request)
    {
       
        $insert = User::create([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'city_id'=>$request->city_id,
            'phone'=>$request->phone,
            // 'image'=>$this->attributes['image']
          ]);

        if($request->hasFile('image')){
            $file =$request->file('image'); 
			$time = time();
			$ext = $file->getClientOriginalExtension();
			$fullname = $time . '.' . $ext;
            $move = $file->move(public_path() .'/uploads/images/users', $fullname);
            $path ='/uploads/images/users';
            $image = $path.'/'.$fullname;
            User::where('id',$insert->id)->update(['image'=>$image]);
        }
        $agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_create_user','text'=>'Create New User','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),$insert,$request->ipinfo);


        Session::flash('success',trans('home.message_success'));
        return redirect()->back();        
    }

    public function edit($id,Request $request)
    {
        $agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_browse_edit_user','text'=>'Brwose edit  User','browser'=>$agent];
        $info = User::find($id);
        DoFire::MK_REPORT($data,Auth::id(),$info,$request->ipinfo);

        return view($this->view.'.edit',compact('info'));
        
    }

    public function show()
    {
        # code...
    }

    public function update($user_id,UserRequest $request)
    {
        $update = User::find($user_id)->update([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'city_id'=>$request->city_id,
            'phone'=>$request->phone,
        ]);

        if($request->has('password')){
            User::find($user_id)->update([
                'password'=>bcrypt($request->password),
            ]);
        }

        if($request->hasFile('image')){
            $file =$request->file('image'); 
			$time = time();
			$ext = $file->getClientOriginalExtension();
			$fullname = $time . '.' . $ext;
            $move = $file->move(public_path() .'/uploads/images/users', $fullname);
            $path ='/uploads/images/users';
            $image = $path.'/'.$fullname;
            User::where('id',$user_id)->update(['image'=>$image]);
        }

        $data_track = User::find($user_id);
        $agent = new Agent();
        $agent = $agent->platform().','.$agent->browser().$agent->version($agent->browser());
        $data = ['key'=>'dashboard_user_update','text'=>'update User info','browser'=>$agent];
        DoFire::MK_REPORT($data,Auth::id(),$data_track,$request->ipinfo);

        Session::flash('success',trans('home.message_success'));
        return redirect()->back();  
    }
}

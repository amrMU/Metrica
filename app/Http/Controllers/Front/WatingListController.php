<?php

namespace App\Http\Controllers\Front;
/*
*********************************
* Name: Amr Muhamed             *
* Email: amrmuhamed9@gmail.com  *
* Phone: +201061637022          *
* Copywrits @amrMU Githup       *
* *******************************
*/
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\WatingListRequest;
use App\Notifications\Front\WaitingListThankNotify;
use App\WaitingList;
use Notification;
use Session;
use Config;

class WatingListController extends Controller
{
    public function __construct(WaitingList $model)
    {
        $this->model = $model;
    }

    public function setInList(WatingListRequest $request)
    {

        
      $create =   $this->model->create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'address'=>$request->address,
                    'phone'=>$request->phone,
                    'status'=>'not_read',
                    'type'=>$request->type,
                ]);

        $notify =   Notification::send(
                        $create,
                        new WaitingListThankNotify($create)
                    );
        Session::flash('success',trans('home.registered_successfully'));
        
        return redirect()->back();
    }
}

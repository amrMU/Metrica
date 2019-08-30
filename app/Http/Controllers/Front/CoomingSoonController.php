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
use Config;
class CoomingSoonController extends Controller
{
	public $view = 'front';

    public function index()
    {
        return view($this->view.'/cooming_soon');
    }
}

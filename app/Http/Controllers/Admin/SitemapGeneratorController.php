<?php

namespace App\Http\Controllers\Admin;
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
use App\Http\Requests\Admin\SiteMapeRequest;
use Spatie\Sitemap\SitemapGenerator;
use Session;

class SitemapGeneratorController extends Controller
{

    public function create()
    {
        return view('dashboard.sitemap.create');
    }

    public function store(SiteMapeRequest $request)
    {
        $data = [];
        $content =  view('dashboard.sitemap.show',compact('data'));
        
        return response($content,200)->header('Content-Type', 'text/xml');
;    }
}

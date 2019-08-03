<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SiteMapeRequest;
use Spatie\Sitemap\SitemapGenerator;
use Session;

class SitemapGeneratorController extends Controller
{
    // public function __construct(SiteMapeRequest $request)
    // {
    //  $this->request = $request;
    // }    


    public function create()
    {
        return view('dashboard.sitemap.create');
    }

    public function store(SiteMapeRequest $request)
    {

        $file_name = time().'.xml';
        $path = public_path().'/sitemap/'.$file_name;
        // $file = SitemapGenerator::create($request->url)->writeToFile($path);
        $file = SitemapGenerator::create($request->url)->writeToFile($path);
        session(['file'=>$file_name]);
        Session::flash('file_get',$file_name);
        Session::flash('success',trans('home.message_success'));
        return redirect()->back();
;    }
}

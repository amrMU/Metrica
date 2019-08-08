<?php

namespace App\Http\Controllers\Admin;

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

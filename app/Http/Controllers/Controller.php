<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Config;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    public function __construct() {
      
        if (Config::get('app.locale') == 'en'){
            $title = 'title_en';
            $content = 'content_en';
            $Name= 'nameEn';
            $name= 'name_en';
        }else{
            $title = 'title_ar';
            $content = 'content_ar';
            $Name= 'nameAr';
            $name= 'name_ar';
        }
        view()->share('title', $title);
        view()->share('content', $content);
        view()->share('Name', $Name);
        view()->share('name', $name);

     
    }


}

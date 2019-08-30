<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use File;

class ImagesController extends Controller
{
    public static function uploadSingle($file,$path,$db_path)
    {

        if (isset($file)) {

			$time = (time()* rand(1, 99)) ;
			$ext  =$file->getClientOriginalExtension();
			$fullname = $time . '.' . $ext;
			$file->move($path, $fullname);
			$name =$db_path.'/'.$fullname;
            return $name;
        }
    }

    public static function upload_multiple($request_files, $path)
    {
        $counter = 1;
        $images = array();
        foreach ($request_files as $file) {
            if(base_path() != $path){
                $name = time() * $counter . '.' . $file->getClientOriginalExtension();

                Image::make($file)->save($path . '/org' . "/" . $name);
                Image::make($file)->resize(50, 50)->save($path .   '/50x50' . "/" . $name);
                Image::make($file)->resize(200, 200)->save($path . '/200x200' . "/" . $name);
                Image::make($file)->resize(250, 100)->save($path .   '/250x100' . "/" . $name);
                Image::make($file)->resize(150, 100)->save($path . '/150x100' . "/" . $name);
                Image::make($file)->resize(150, 150)->save($path . '/150x150' . "/" . $name);
                Image::make($file)->resize(150, 150)->save($path . '/150x150' . "/" . $name);
                Image::make($file)->resize(200, 150)->save($path . '/200x150' . "/" . $name);
                Image::make($file)->resize(300, 300)->save($path . '/300x300' . "/" . $name);
                Image::make($file)->resize(300, 200)->save($path . '/300x200' . "/" . $name);
                Image::make($file)->resize(421, 589)->save($path . '/421x589' . "/" . $name);
                Image::make($file)->resize(500, 500)->save($path . '/500x500' . "/" . $name);
                Image::make($file)->resize(500, 300)->save($path . '/500x300' . "/" . $name);
            }else{
                $name = $file->getClientOriginalName();
                $file->move(base_path(), $name);
            }

            $images[] = $name;
            $counter++;
        }
        return $images;
    }


}

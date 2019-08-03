<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


 Route::get('url', function () {
     $url = 'https://bedayh4it.com';


     function parseUrl($url) {
         $r  = "^(?:(?P<scheme>\w+)://)?";
         $r .= "(?:(?P<login>\w+):(?P<pass>\w+)@)?";
         $r .= "(?P<host>(?:(?P<subdomain>[\w\.]+)\.)?" . "(?P<domain>\w+\.(?P<extension>\w+)))";
         $r .= "(?::(?P<port>\d+))?";
         $r .= "(?P<path>[\w/]*/(?P<file>\w+(?:\.\w+)?)?)?";
         $r .= "(?:\?(?P<arg>[\w=&]+))?";
         $r .= "(?:#(?P<anchor>\w+))?";
         $r = "!$r!";                                                // Delimiters

         preg_match ( $r, $url, $out );

         return $out;
     }
     echo "<pre>";
     print_r ( parseUrl ( $url ) );

 });



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::group(['prefix' => 'admin'], function () {
		
		Route::get('home','Admin\HomeController@index');
		Route::get('reports_browsing','Admin\ReportsController@GetBrowsingInfo');

		Route::get('sitemap/create','Admin\SitemapGeneratorController@create');
		Route::post('sitemap','Admin\SitemapGeneratorController@store');
	});


	Route::get('logout','Auth\LoginController@logout');
});
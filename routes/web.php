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




Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::group(['prefix' => 'admin'], function () {
        Route::get('setting','Admin\SettingController@create');
        Route::post('setting','Admin\SettingController@store');
		
		Route::get('home','Admin\HomeController@index');
		Route::get('reports_browsing','Admin\ReportsController@GetBrowsingInfo');

		Route::get('sitemap/create','Admin\SitemapGeneratorController@create');
		Route::post('sitemap','Admin\SitemapGeneratorController@store');
	});


	Route::get('logout','Auth\LoginController@logout');
});
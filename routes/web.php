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


	Route::group(
	[
		'prefix' => LaravelLocalization::setLocale(),
	],
	function()
	{
		Route::get('/','Front\CoomingSoonController@index');
		Route::post('user/waiting','Front\WatingListController@setInList');	


	Route::group(['middleware' => 'auth'], function () {

		Route::group(['prefix' => '/admin'], function () {
			// $set_local_ar =  LaravelLocalization::setLocale('ar') ;

			Route::get('setting','Admin\SettingController@create');
			Route::post('setting','Admin\SettingController@store');
			
			Route::get('home','Admin\HomeController@index');
			Route::get('reports_browsing','Admin\ReportsController@GetBrowsingInfo');
			Route::get('reports_browsing/{id}/u/{user_name}','Admin\ReportsController@getUserBrowseInfo');
			Route::get('reports_browsing/{id}/delete','Admin\ReportsController@delete_reports');

			Route::get('file/{id}/delete','Admin\SettingController@delete_external_file');

			Route::get('wating_lists','Admin\WatingListController@index');
			Route::get('wating_list/search','Admin\WatingListController@saarch');
			Route::get('wating_lists/{id}/delete','Admin\WatingListController@destroy');

			Route::get('sitemap/create','Admin\SitemapGeneratorController@create');
			Route::post('sitemap','Admin\SitemapGeneratorController@store');
		});


		Route::get('logout','Auth\LoginController@logout');
	});
	});



Auth::routes();

// Route::group(['middleware' => 'auth'], function () {

// 	Route::group(['prefix' => '/admin'], function () {
// 		// $set_local_ar =  LaravelLocalization::setLocale('ar') ;

//         Route::get('setting','Admin\SettingController@create');
//         Route::post('setting','Admin\SettingController@store');
		
// 		Route::get('home','Admin\HomeController@index');
// 		Route::get('reports_browsing','Admin\ReportsController@GetBrowsingInfo');
// 		Route::get('reports_browsing/{id}/u/{user_name}','Admin\ReportsController@getUserBrowseInfo');
// 		Route::get('reports_browsing/{id}/delete','Admin\ReportsController@delete_reports');

// 		Route::get('file/{id}/delete','Admin\SettingController@delete_external_file');

// 		Route::get('wating_lists','Admin\WatingListController@index');
// 		Route::get('wating_list/search','Admin\WatingListController@saarch');
// 		Route::get('wating_lists/{id}/delete','Admin\WatingListController@destroy');

// 		Route::get('sitemap/create','Admin\SitemapGeneratorController@create');
// 		Route::post('sitemap','Admin\SitemapGeneratorController@store');
// 	});


// 	Route::get('logout','Auth\LoginController@logout');
// });
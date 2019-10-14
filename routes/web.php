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
			Route::get('wating_lists/export','Admin\WatingListController@ExportExelSheet');
			Route::get('wating_lists/{id}/delete','Admin\WatingListController@destroy');

			Route::resource('users','Admin\UsersController');
			Route::get('users_export','Admin\UsersController@ExportExelSheet');

			Route::resource('categories','Admin\CategoriesController');
			Route::get('categories/{id}/delete','Admin\CategoriesController@destroy');
			Route::get('categories_export','Admin\CategoriesController@ExportExelSheet');

			Route::resource('pages','Admin\PagesController');
			Route::get('pages/{id}/delete','Admin\PagesController@destroy');
			Route::get('pages_export','Admin\PagesController@ExportExelSheet');

			Route::resource('blogs','Admin\BlogsController');
			Route::get('blogs/{id}/delete','Admin\BlogsController@destroy');
			Route::get('blogs_search','Admin\BlogsController@search');			
			Route::get('blogs_export','Admin\BlogsController@ExportExelSheet');


			Route::get('sitemap/create','Admin\SitemapGeneratorController@create');
			Route::post('sitemap','Admin\SitemapGeneratorController@store');
		});


		Route::get('logout','Auth\LoginController@logout');
	});
	});



Auth::routes();

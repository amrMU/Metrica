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

// use Illuminate\Support\Facades\Redis;
// Route::get('/', function () {
//     $visits = Redis::incr('visits');
//     return $visits;
// });
use Illuminate\Http\Request;
Route::get('/ip', function (Request $request) {
	dd($request->ipinfo);
    // $location_text = "The IP address ".$request->ipinfo->ip." is located in the city of ".$request->ipinfo->city.'.';

    // return $location_text;
});

Route::get('admin',function(){
    return view('dashboard.home');
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::group(['prefix' => 'admin'], function () {
		Route::get('home',function(){
		    return view('dashboard.index');
		});
	});

	Route::get('logout','Auth\LoginController@logout');
});
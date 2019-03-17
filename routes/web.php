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


Route::get('/kazned', function() {
 //   Route::post('/tresult','kazned@updateBanner')->name('name');
    //App::call('App\Http\Controllers\kazned@updateBanner');
    $arr = array('Banner 1', 'Banner 2', 'Banner 3', 'Banner 4');
    $random = array_rand($arr,1);
		return view('kazned.main')->with('name',$arr[$random]);
});

Route::post('/dbc', ['uses'=>"kazned@getResult"]);



Route::get('/test', function () {
    $petani = DB::table('kazned')->get();
    return view('kazned.test', ['data' => $petani]);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

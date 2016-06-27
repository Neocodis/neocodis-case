<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//refers to the URL /welcome

/*
Route::get('/', function (Request $r){
    
    $r->session()->put('lang', 'PL');
    
    return $r->session()->get(user);
});
*/





Route::get('/','SiteController@tropical_pl');

Route::get('tropical/pl','SiteController@tropical_pl');
Route::get('tropical/en','SiteController@tropical_en');

Route::get('zss6/pl','SiteController@zss6_pl');
Route::get('zss6/en','SiteController@zss6_en');

Route::get('shecco/pl','SiteController@shecco_pl');
Route::get('shecco/en','SiteController@shecco_en');

//Route::get('site/index/{type}/{lang}', 'SiteController@index');

/*
Route::get('/welcome', function () {
    return view('welcome');
});

//refers to the URL /database-test
Route::get('database-test',function(){
   if( DB::connection()->getDatabaseName() )
   {
       echo 'Connected successfully to database ' . DB::connection()->getDatabaseName();
   }
});

Route::get('movies', 'MovieController@index');

 */
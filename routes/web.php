<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('user/{id?}', function ($id=1){
    //return $id;
//})->where('id','[0-9]+');

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/{id?}', 'BaseController@getIndex');
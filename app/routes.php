<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::resource('url', 'UrlController', array('before' => 'auth.basic'));
Route::group(array('before' => 'auth.basic'), function()
{
  Route::resource('url', 'UrlController');
});


Route::get('/hello', "HomeController@showWelcome");
Route::get('/{id?}', "HomeController@index");
Route::get('/{id?}/weight/{weight?}', "HomeController@index");
Route::get('/category/{id?}/weight/{weight?}', "HomeController@content");


Route::get('/authtest', array('before' => 'auth.basic', function()
{
  return View::make('poop');
}));
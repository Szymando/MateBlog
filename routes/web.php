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
Route::get('/home', function(){
  return view('home');
});

Route::get('/', [
  'uses' => 'IndexController@index',
  'as' => 'index.index'
]);

Route::get('/post/{post}', [
  'uses' => 'IndexController@showPost',
  'as' => 'index.showPost'
]);

//comments
Route::post('/comments/{post_id}', [
  'uses' => 'CommentsController@store',
  'as' => 'comments.store'
]);

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

<?php
//To delete
Route::get('/home', function(){
  return view('home');
});
//Home
Route::get('/', [
  'uses' => 'IndexController@index',
  'as' => 'index.index'
]);
//Posts
Route::get('/post/{post}', [
  'uses' => 'IndexController@showPost',
  'as' => 'index.showPost'
]);

//comments
Route::post('/comments/{post_id}', [
  'uses' => 'CommentsController@store',
  'as' => 'comments.store'
]);
//Auth
Auth::routes();
//Admin page
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//About us
Route::get('/about-us', [
  'uses' => 'IndexController@aboutUs',
  'as' => 'index.aboutUs'
]);
//contacts
Route::get('/contact', [
  'uses' => 'IndexController@contact',
  'as' => 'index.contact'
]);

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

Route::get('/','ArticleController@index');
Route::get('edit',function(){
    return view('edit.new');
});
Route::get('find/{type}','ArticleController@find') -> name('articles.find');

Route::resource('articles','ArticleController');
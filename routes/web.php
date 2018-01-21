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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','ArticleController@index');
Route::get('/home','ArticleController@index');

Route::get('/article/create','ArticleController@create');
Route::post('/article/create','ArticleController@store');
Route::get('/article/{num}','ArticleController@show');

//更新页面
Route::get('/article/{num}/edit','ArticleController@edit');
//更新行为
Route::put('/article/{num}','ArticleController@update');

//删除行为
Route::post('/article/{num}/del','ArticleController@del');
Route::get('/register','RegisterController@index');
Route::post('/register','RegisterController@register');
Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout');

//提交评论
Route::post('/article/{num}/comment','ArticleController@comment');

//点赞
Route::get('/article/{num}/zan','ArticleController@zan');
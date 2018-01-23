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
//首页
Route::get('/','ArticleController@index');
Route::get('/home','ArticleController@index');

//注册页
Route::get('/register','RegisterController@index');
//注册行为
Route::post('/register','RegisterController@register');
//登陆页
Route::get('/login','LoginController@index')->name('login');
//登陆行为
Route::post('/login','LoginController@login');
//登出行为
Route::get('/logout','LoginController@logout');
//文章详情页
Route::get('/article/{num}','ArticleController@show');

Route::group(['middleware'=>'auth:web'],function(){
    //新增文章页
    Route::get('/article/create','ArticleController@create');
    //新增文章行为
    Route::post('/article/create','ArticleController@store');
    //文章更新页面
    Route::get('/article/{num}/edit','ArticleController@edit');
    //文章更新行为
    Route::put('/article/{num}','ArticleController@update');
    //文章删除行为
    Route::post('/article/{num}/del','ArticleController@del');
    //提交评论
    Route::post('/article/{num}/comment','ArticleController@comment');
    //点赞
    Route::get('/article/{num}/zan','ArticleController@zan');
    //个人主页
    Route::get('/user/{user}','UserController@show');
    //个人设置页
    Route::get('/user/{user}/setting','UserController@setting');
    //个人设置行为
    Route::post('/user/{user}/setting','UserController@settingStore');
});

//管理后台
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('/','LoginController@index');
    Route::post('/','LoginController@login');

    Route::get('/logout','LoginController@logout');

    Route::group(['middleware' => 'auth:admin'],function (){
        Route::get('/home','HomeController@index');
    });

});

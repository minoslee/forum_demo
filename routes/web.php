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

Route::get('/hot','ArticleController@hot');
Route::get('/recent','ArticleController@recent');
Route::get('/reply','ArticleController@reply');

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
Route::get('/article/{num}','ArticleController@show')->where('num', '[0-9]+');


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
    Route::get('/login','LoginController@index');
    Route::post('/login','LoginController@login');

    Route::get('/logout','LoginController@logout');

    Route::group(['middleware' => 'auth:admin'],function (){
        Route::get('/home','HomeController@index');

        //用户管理
        Route::get('/users','UserController@index');
        Route::get('/users/create','UserController@create');
        Route::post('/users/store','UserController@store');
        Route::get('/users/{users}/passw','UserController@passw');
        Route::post('/users/{users}/passw','UserController@edit');

        //文章审核
        Route::get('/articles','ArticleController@index');
        Route::post('/articles/{num}/confirm','ArticleController@confirm');
        Route::post('/articles/{num}/reject','ArticleController@reject');
        Route::post('/articles/{num}/del','ArticleController@del');

        //评论审核
        Route::get('/comments','CommentController@index');
        Route::post('/comments/{num}/del','CommentController@del');

        //链接管理
        Route::get('/links','LinkController@index');
        Route::get('/links/add','LinkController@create');
        Route::post('/links/add','LinkController@store');
        Route::post('/links/{id}/del','LinkController@del');
    });

    //Route::get('/test','HomeController@test');
});
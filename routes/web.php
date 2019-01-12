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
    return view('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//个人中心
Route::get('/user/my_center', 'home\UserController@my_center');
Route::post('/user/my_center_cont', 'home\UserController@my_center_cont');
Route::post('/user/save_icon', 'home\UserController@save_icon');

//我的日志
Route::get('/post/my_blog', 'home\PostController@my_blog');



//文章模块
Route::get('/blogList', 'home\PostController@index');

Route::get('/detail/{id}', 'home\PostController@todetail');

Route::get('/create', 'home\PostController@create_blog');

Route::post('/create/store', 'home\PostController@store');

Route::post('/reply/{id}', 'home\PostController@reply');

Route::get('/follow/{id}', 'home\PostController@follow');
Route::get('/unfollow/{id}', 'home\PostController@unfollow');

Route::get('/my_follows', 'home\PostController@my_follows');

Route::post('/reply', 'home\PostController@reply');

//发现美食
Route::get('/find_foods', 'home\FoodsController@find_foods');
Route::post('/foods/get_find_foods', 'home\FoodsController@get_find_foods');

//移动首页
Route::get('/m',function (){

    return view("m/master");
});
//移动帖子信息列表m_list
Route::get('/post/m_list', 'home\PostController@m_list');
Route::get('/post/m_detail/{id}', 'home\PostController@m_detail');

//帖子搜索
Route::post('/post/m_search', 'home\PostController@m_search');
//活动保存
Route::post('/game/m_save', 'home\GameController@m_save');

//活动列表
Route::get('/game/m_list', 'home\GameController@m_list');
Route::get('/game/m_detail/{id}', 'home\GameController@m_detail');

//移动帖子收藏(m)
Route::get('/post/m_follow/{id}', 'home\PostController@m_follow');
Route::get('/post/m_unfollow/{id}', 'home\PostController@m_unfollow');

//m_my_follows
Route::get('/post/m_my_follows', 'home\PostController@m_my_follows');


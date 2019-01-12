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
Route::post('/reply', 'home\PostController@reply');


//发现美食
Route::get('/find_foods', 'home\FoodsController@find_foods');
Route::post('/foods/get_find_foods', 'home\FoodsController@get_find_foods');

//美食预定
Route::get('/foods/reserve', 'home\FoodsController@reserve');
Route::post('/foods/get_reserve', 'home\FoodsController@get_reserve');

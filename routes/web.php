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
Route::get('user/my_center', 'home\UserController@my_center');
Route::post('user/my_center_cont', 'home\UserController@my_center_cont');

//文章模块
Route::get('/blogList', 'home\PostController@index');

Route::get('/detail/{id}', 'home\PostController@todetail');

Route::get('/create', 'home\PostController@create_blog');

Route::post('/create/store', 'home\PostController@store');
Route::post('/reply/{id}', 'home\PostController@reply');

Route::get('/follow/{id}', 'home\PostController@follow');
Route::get('/unfollow/{id}', 'home\PostController@unfollow');

Route::get('/my_follows', 'home\PostController@my_follows');

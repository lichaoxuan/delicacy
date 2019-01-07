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
    return view('home/delicacy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blogList', 'home\PostController@index');

Route::get('/detail/{id}', 'home\PostController@todetail');

Route::get('/create', 'home\PostController@create_blog');

Route::post('/create/store', 'home\PostController@store');
Route::post('/reply', 'home\PostController@reply');



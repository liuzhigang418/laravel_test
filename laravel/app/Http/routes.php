<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//基础路由
Route::get('test',function(){
    return 'test';
});

Route::post('admin/test',function(){
    return 'post';
});

//多请求路由
Route::match(['get','post'],'admin/login',function(){
    return 'login';
});


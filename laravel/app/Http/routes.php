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

/*Route::get('/', function () {
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
});*/

//any
/*Route::any('admin/register',function(){
    return 'register';
});

//路由传参
Route::get('admin/login/{id}',function($id){
   return $id;
});

//路由传参(多参数)
Route::get('user/{id}/{name}',function($id,$name){
    return $id.'->'.$name;
});

//路由传递可选参数
Route::get('good/{page?}',function($page=1){
    return 'page->'.$page;
});

//参数限制
Route::get('limit/{name}',function($name){
    return $name;
})->where('name','[A-Za-z]*');
//多参数限制
Route::get('user/{id}/{name}',function($id,$name){
    return $id.'->'.$name;
})->where(['id'=>'[1-9]*','name'=>'[A-Za-z]*']);*/

//控制器路由
//Route::get('test/{id}','Admin\TestController@test')->where('id','[0-9]*');

//模板页面路由
/*Route::get('test','MsgController@test');

Route::get('add','MsgController@add');

Route::get('up','MsgController@up');

Route::get('del','MsgController@del');

Route::get('show','MsgController@show');*/

Route::get('/',function(){
   return view('login');
});

Route::any('/category',function(){
   return view('category');
});

Route::get('/login','View\MemberController@toLogin');

Route::get('/register','View\MemberController@toRegister');
Route::get('/category','view\BookController@toCategory');
Route::get('/product/category_id/{category_id}','view\BookController@toProduct');
Route::get('/product/{product_id}','view\BookController@toPdtContent');

Route::group(['prefix'=>'service'],function(){
    Route::any('validate_code/create','Service\ValidateController@create');
    Route::any('validate_phone/send','Service\ValidateController@sendSMS');
    Route::post('register','Service\MemberController@register');
    Route::get('validate_email','Service\ValidateController@validateEmail');
    Route::post('login','Service\MemberController@login');
    Route::get('category/parent_id/{parent_id}','Service\BookController@toCategory');
});



<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use DB;
class MsgController extends Controller{
    public function test(){
        $data=['title'=>'测试','msg'=>'eminem'];
        return view('test',$data);//将使用test.blade.php
    }

    //DB数据库操作
    public function add (){
        //单行数据 insert()
        //$data=['title'=>'测试','content'=>'测试内容','age'=>'12'];
        //多行数据

        $data = array(
            array('title'=>'测试','content'=>'测试内容','age'=>'12'),
            array('title'=>'自学','content'=>'自学内容','age'=>'22')
        );
        $rs = DB::table('goods')->insert($data);

        //insertGetId()添加数据返回id
        return $rs;//将使用index.blade.php
    }

    //修改
    public function up(){
        //修改
        $rs = DB::table('goods')->where('id','=',1)->update(['age'=>'32']);
        //increment() 增长  例 increment('age',2)自增2 默认自增1；
        //decrement() 减少  例 decrement('age',2)自减2 默认自减1；
        return $rs;
    }

    //删除
    public function del(){
        return DB::table('goods')->where('id',4)->delete()?'false':'ok';
    }

    //查询数据
    public function show(){

        //取多行 get
//        //select * from goods
//        var_dump(DB::table('goods')->get());
//        //select * from goods where id>1
//        var_dump(DB::table('goods')->where('id','>',1)->get());
//
//        //选择某些列
//        //select id,title from goods
//        var_dump(DB::table('goods')->select('id','title')->get());
//
//        //取单行first
//        var_dump(DB::table('goods')->where('id','>',1)->first());


        //模板继承
       return view('son');


    }


}

?>
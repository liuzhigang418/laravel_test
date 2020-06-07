<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MsgController extends Controller{
    public function test(){
        $data=['title'=>'测试','msg'=>'eminem'];
        return view('test',$data);//将使用test.blade.php
    }

    public function add (){
        return view('admin.index');//将使用index.blade.php
    }
}

?>
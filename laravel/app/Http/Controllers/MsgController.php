<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MsgController extends Controller{
    public function test(){
        return view('test');//将使用test.blade.php
    }

    public function add (){
        return view('admin.index');//将使用index.blade.php
    }
}

?>
<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Entity\Category;

class BookController extends Controller
{
    public function toCategory($value=''){
        $categorys=Category::whereNull('parent_id')->get();
        return view('category')->with('categorys',$categorys);
    }
}

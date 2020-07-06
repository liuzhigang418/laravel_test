<?php

namespace App\Http\Controllers\View;

use App\Entity\Product;
use App\Http\Controllers\Controller;
use App\Entity\Category;
use Log;
class BookController extends Controller
{
    public function toCategory($value=''){
//        Log::info("测试");
        $categorys=Category::whereNull('parent_id')->get();
        return view('category')->with('categorys',$categorys);
    }

    public function toProduct($category_id){

        $products=Product::where('category_id',$category_id)->get();
        return view('product')->with('products',$products);
    }
}

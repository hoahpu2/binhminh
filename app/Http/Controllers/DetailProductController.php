<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Product_images;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function index($slug){
        $category = Category::all()->where("CA_status",'1')->where('CA_parentId',0);
        $product = Product::where("PR_alias",$slug)->first();
        $saleProduct = Product::where("PR_alias",$slug)->orderBy('PR_sale','desc')->take(10)->get();
        $images = Product_images::where("IM_PR_id",$product->PR_id)->get();
        $recommended = Product::where('PR_CA_id',$product->PR_CA_id)->take(10)->get();
    	return view('sub/client/main-detail',compact('category','product','saleProduct','images','recommended'));
    }
    public function getList($slug){
        $category = Category::all()->where("CA_status",'1')->where('CA_parentId',0);
    }
}

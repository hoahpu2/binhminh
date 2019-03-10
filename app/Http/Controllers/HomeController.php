<?php

namespace App\Http\Controllers;
use App\Category;
use App\Slider;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $category = Category::all()->where("CA_status",'1')->where('CA_parentId',0);
        $slider = Slider::all()->where('SL_status',1);
        $newProduct = Product::where("PR_status",'1')->orderBy('created_at','desc')->take(10)->get();
        $saleProduct = Product::where("PR_status",'1')->orderBy('PR_sale','desc')->take(10)->get();
    	return view('sub.client.main',compact('category','slider','newProduct','saleProduct'));
    }
}

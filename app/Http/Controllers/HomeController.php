<?php

namespace App\Http\Controllers;
use App\Category;
use App\Slider;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::where("CA_status",1)->where('CA_parentId',0)->orderBy('CA_number','ASC')->take(5)->get();
        if (!empty($category)) {
        	foreach ($category as $key => $value) {
        		if ($value->CA_parentId == 0) {
        			$category[$key]->sub_category = Category::where('CA_parentId',$value->CA_id)->where("CA_status",1)->get()->toArray();
        		}
        	}
        }
        // dd($category);
        // echo"<pre>";print_r($category);die();
        $slider = Slider::all()->where('SL_status',1);
        $newProduct = Product::where("PR_status",'1')->orderBy('created_at','desc')->take(4)->get();
        $saleProduct = Product::where("PR_status",'1')->orderBy('PR_sale','desc')->take(4)->get();
    	return view('sub.client.main',compact('category','slider','newProduct','saleProduct'));
    }
}

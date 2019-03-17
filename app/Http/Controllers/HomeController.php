<?php

namespace App\Http\Controllers;
use App\Category;
use App\Slider;
use App\Product;
use App\Catecontent;
use App\News;
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
        $categoryContent = Catecontent::where('CC_status',1)->orderBy('CC_number','asc')->get();
        foreach ($categoryContent as $key =>$value){
            $value->product = Product::where('PR_status',1)->where('PR_CC_id',$value->CC_id)->take(4)->get();
        }
        $news = News::where('N_status',1)->take(4)->get();
        $slider = Slider::all()->where('SL_status',1);
        $newProduct = Product::where("PR_status",'1')->orderBy('created_at','desc')->take(4)->get();

    	return view('sub.client.main',compact('category','slider','categoryContent','news'));
    }
}

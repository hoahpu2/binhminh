<?php

namespace App\Http\Controllers;
use App\Category;
use App\Slider;
use App\Product;
use App\Catecontent;
use App\News;
use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // die('xxx');
//         $category = Category::where("CA_status",1)->where('CA_parentId',0)->orderBy('CA_number','ASC')->take(5)->get();
//         if (!empty($category)) {
//         	foreach ($category as $key => $value) {
//         		if ($value->CA_parentId == 0) {
//         			$category[$key]->sub_category = Category::where('CA_parentId',$value->CA_id)->where("CA_status",1)->get()->toArray();
//         		}
//         	}
//         }
// //        create category levels
//         $categoryContent = Catecontent::where('CC_status',1)->orderBy('CC_number','asc')->get();
//         foreach ($categoryContent as $key =>$value){
//             $value->product = Product::where('PR_status',1)->where('PR_CC_id',$value->CC_id)->take(4)->get();
//             $value->count = count( Product::where('PR_status',1)->where('PR_CC_id',$value->CC_id)->take(4)->get()->toArray());
//         }
//         $news = News::where('N_status',1)->take(4)->get();
//         $slider = Slider::all()->where('SL_status',1);
//         $contactAdmin = Contact::get()->first();

    	return view('sub.client.main');
    }

    public function vechungtoi()
    {
        return view('sub.client.vechungtoi');
    }

    public function sanpham()
    {
        return view('sub.client.sanpham');
    }

    public function giaiphap()
    {
        return view('sub.client.giaiphap');
    }

    public function duan()
    {
        return view('sub.client.duan');
    }

    public function dichvu()
    {
        return view('sub.client.dichvu');
    }

    public function lienhe()
    {
        return view('sub.client.lienhe');
    }

    public function notFound()
    {
        $category = Category::where("CA_status",1)->where('CA_parentId',0)->orderBy('CA_number','ASC')->take(5)->get();
        if (!empty($category)) {
        	foreach ($category as $key => $value) {
        		if ($value->CA_parentId == 0) {
        			$category[$key]->sub_category = Category::where('CA_parentId',$value->CA_id)->where("CA_status",1)->get()->toArray();
        		}
        	}
        }
//        create category levels
        $contactAdmin = Contact::get()->first();

    	return view('sub.404-not-found',compact('category','slider','contactAdmin'));
    }

}

<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Product_images;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function index($slug)
    {
        $category = Category::where("CA_status",1)->where('CA_parentId',0)->orderBy('CA_number','ASC')->take(5)->get();
        if (!empty($category)) {
            foreach ($category as $key => $value) {
                if ($value->CA_parentId == 0) {
                    $category[$key]->sub_category = Category::where('CA_parentId',$value->CA_id)->where("CA_status",1)->get()->toArray();
                }
            }
        }
        $product = Product::where("PR_alias",$slug)->first();
        $saleProduct = Product::where("PR_alias",$slug)->orderBy('PR_sale','desc')->take(10)->get();
        if(isset($product->PR_id)){
            $images = Product_images::where("IM_PR_id",$product->PR_id)->get();
            $recommended = Product::where('PR_CA_id',$product->PR_CA_id)->take(4)->get();
            return view('sub/client/main-detail',compact('category','product','saleProduct','images','recommended'));
        }
        return view('sub/client/main-detail',compact('category'));
    }
    public function getList($slug){
        $category = Category::all()->where("CA_status",'1')->where('CA_parentId',0);
        $categorys = Category::all()->where('CA_alias',$slug)->first();
        if(isset($categorys->CA_id)){
              $product = Product::all()->where('PR_CA_id',$categorys->CA_id)->where('PR_status',1);
              return view('sub.client.list-product',compact('category','product','categorys'));

        }
      return view('sub.client.list-product',compact('category'));

    }
    public function getListProductRecommend(){
        $category = Category::all()->where("CA_status",'1')->where('CA_parentId',0);
        $product = Product::where("PR_status",'1')->orderBy('PR_sale','desc')->get();
        return view('sub.client.list-product',compact('category','product'));
    }
    public function search($slug){
        $category = Category::all()->where("CA_status",'1')->where('CA_parentId',0);
        $product = Product::all()->where('PR_name','like','%'.$slug.'%');
        $count = $product->count();
        return view('sub.client.list-product',compact('category','product','slug','count'));
    }


}

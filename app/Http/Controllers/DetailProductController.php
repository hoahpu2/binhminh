<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Product_images;
use App\Contact;
use App\Catecontent;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

class DetailProductController extends Controller
{
    public function index(UrlGenerator $url,$slug)
    {
        $contactAdmin = Contact::get()->first();
        $category = Category::where("CA_status",1)->where('CA_parentId',0)->orderBy('CA_number','ASC')->take(5)->get();
        if (!empty($category)) {
            foreach ($category as $key => $value) {
                if ($value->CA_parentId == 0) {
                    $category[$key]->sub_category = Category::where('CA_parentId',$value->CA_id)->where("CA_status",1)->get()->toArray();
                }
            }
        }
        $product = Product::where("PR_alias",$slug)->first();
        $url = $url->to('/').'/';
        if(isset($product->PR_id)){
            $images = Product_images::where("IM_PR_id",$product->PR_id)->get();
            $recommended = Product::where('PR_CA_id',$product->PR_CA_id)->take(4)->get();
            return view('sub/client/main-detail',compact('category','product','images','recommended','url','contactAdmin'));
        }
        return view('sub/client/main-detail',compact('category','url','contactAdmin'));
    }
    //get list product by category content
    public function getListProductBySlug($slug){
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
        $categoryContent = Catecontent::where('CC_alias',$slug)->first();
        if(isset($categoryContent->CC_id)){
            $product = Product::where('PR_status',1)->where('PR_CC_id',$categoryContent->CC_id)->paginate(8);
        }
      return view('sub.client.list-product',compact('category','product','contactAdmin','categoryContent'));

    }
      public function getListProductByCategory($slug){
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
        $categoryContent = Category::where('CA_alias',$slug)->first();
        if(isset($categoryContent->CA_id)){
            $product = Product::where('PR_status',1)->where('PR_CA_id',$categoryContent->CA_id)->paginate(8);
        }
      return view('sub.client.list-product',compact('category','product','contactAdmin','categoryContent'));

    }
    public function search(){
        $name = $_POST['product'];
        $contactAdmin = Contact::get()->first();
        $category = Category::where("CA_status",1)->where('CA_parentId',0)->orderBy('CA_number','ASC')->take(5)->get();
        if (!empty($category)) {
            foreach ($category as $key => $value) {
                if ($value->CA_parentId == 0) {
                    $category[$key]->sub_category = Category::where('CA_parentId',$value->CA_id)->where("CA_status",1)->get()->toArray();
                }
            }
        }
        $product = Product::where('PR_name','like','%'.$name.'%')->paginate(8);
        $count = $product->count();
        return view('sub.client.list-product',compact('category','product','name','count','contactAdmin'));
    }


}

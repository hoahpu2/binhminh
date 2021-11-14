<?php

namespace App\Http\Controllers;
use App\Category;
use App\Slider;
use App\Product;
use App\Catecontent;
use App\News;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
        $contact = Contact::find(1);
        return view('sub.client.vechungtoi', compact('contact'));
    }

    public function sanpham()
    {
        $a_GetCategory = $this->getCategory();
        
        $all_Product = Product::where('PR_status', 1);
        $cateActive = '';
        if(isset($_GET['cate'])){
            $all_Product = $all_Product->where('PR_CA_id', $_GET['cate']);
            $cateActive = $_GET['cate'];
        }
        
        $all_Product = $all_Product->orderBy('PR_id', 'desc')->limit(12)->get();
        return view('sub.client.sanpham', compact('a_GetCategory', 'all_Product', 'cateActive'));
    }

    public function getCategory($parent = 0){
        $a_catePa = Category::where('CA_parentId', $parent)->get()->toArray();
        if(!empty($a_catePa)){
            foreach($a_catePa as $key => $value){
                $a_catePa[$key]['subMenu'] = $this->getCategory($value['CA_id']);
                $a_catePa[$key]['list_sub_menu'] = $this->listSubMenu($value['CA_id']);
            }
        }
        return $a_catePa;
    }

    public function listSubMenu($ca_id){
        $a_catePa = Category::select('CA_id')->where('CA_parentId', $ca_id)->get()->toArray();
        if(!empty($a_catePa)){
            $return = [];
            foreach($a_catePa as $a_catePas){
                $return[] = $a_catePas['CA_id'];
                $returnss = $this->listSubMenu($a_catePas['CA_id']);
                if(!empty($returnss)){
                    foreach($returnss as $returnsss){
                        $return[] = $returnsss;
                    }
                }
            }
            return $return;
        }
        return [];
    }

    public function giaiphap()
    {
        return view('sub.client.giaiphap');
    }

    public function duan()
    {
        $a_Slider = Slider::where('SL_status', 1)->orderBy('SL_id', 'desc')->get();

        if ($a_Slider) {
            foreach ($a_Slider as $key=>$value) {
                // dd($value->SL_id);
                $a_Slider[$key]->SL_en_id = Crypt::encryptString($value->SL_id);
            }
        }
        return view('sub.client.duan', compact('a_Slider'));
    }

    public function duanDetail($slug)
    {
        $decrypted = Crypt::decryptString($slug);
        $slider = Slider::find($decrypted);
        return view('sub.client.duan-detail', compact('slider'));
    }

    public function dichvu()
    {
        return view('sub.client.dichvu');
    }

    public function lienhe()
    {
        return view('sub.client.lienhe');
    }

    public function productDetail($slug)
    {
        $detailproduct = Product::where('PR_alias', $slug)->first();
        
        return view('sub.client.productDetail', compact('detailproduct'));
    }

    public function tintuc()
    {
        $a_Slider = News::where('N_status', 1)->get();
        return view('sub.client.tintuc', compact('a_Slider'));
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

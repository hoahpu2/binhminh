<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Contact;
use App\News;
class NewsController extends Controller
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
        $news = News::where('N_status',1)->paginate(10);
        $contactAdmin = Contact::get()->first();
        return view('sub.client.news',compact('category','contactAdmin','news'));
    }
    public function getDetail($slug){
        $category = Category::where("CA_status",1)->where('CA_parentId',0)->orderBy('CA_number','ASC')->take(5)->get();
        $contactAdmin = Contact::get()->first();
        $news = News::where('N_alias',$slug)->where('N_status',1)->first();
        return view('sub.client.new-detail',compact('category','contactAdmin','news'));
    }
}

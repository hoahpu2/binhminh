<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        return view('sub.client.contact',compact('category'));

    }
}

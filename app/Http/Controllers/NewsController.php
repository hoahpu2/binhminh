<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
class NewsController extends Controller
{
    public function index(){
        $category = Category::all()->where("CA_status",'1')->where('CA_parentId',0);
        return view('sub.client.news',compact('category'));

    }
}

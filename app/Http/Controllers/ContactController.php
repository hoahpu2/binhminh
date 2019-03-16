<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $category = Category::all()->where("CA_status",'1')->where('CA_parentId',0);
        return view('sub.client.contact',compact('category'));

    }
}

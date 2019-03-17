<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Catecontent;
use App\Product_images;
use App\News;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Input;
use File;
use Storage;
use Session;

class NewsController extends Controller
{
   public function index()
	{
        $news = News::all();
        $c_header = array('Quản lý tin tức','Danh sách tin tức');
        $asset = array('N','pro.add','editer');
    	return view('admin.product.index',compact('news','asset','c_header','linkProduct'));
	}
}

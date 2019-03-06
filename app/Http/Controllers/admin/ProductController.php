<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
	{
        //test
		$a_Pro = Product::select()->get()->toArray();
		if ($a_Pro) {
			foreach ($a_Pro as $key => $value) {
				if ($value['CA_parentId'] == 0) {
					$a_Pro[$key]['parentId'] = 'Danh mục cha';
					continue;
				}
				// $getCate = Category::select('CA_name')->where('CA_id', $value['CA_parentId'])->get()->toArray();
				// $a_Pro[$key]['parentId'] = $getCate[0]['CA_name'];
			}
		}
		
		$asset = array('PR','pro.index');
    	return view('admin.product.index',compact('a_Pro','asset'));
	}

    public function getAdd()
    {
    	// dd($id);
    	// $a_CateOne = Category::select('CA_name','CA_id','CA_parentId','CA_status')->where('CA_id', $id)->get()->toArray();
    	// $a_Cates = Category::select('CA_name','CA_id','CA_status')->where('CA_parentId', 0)->get()->toArray();
    	$asset = array('PR','pro.add');
    	return view('admin.product.add',compact('asset'));
    }

    public function postAdd(Request $request,$id)
    {
        



    	$getCate = Category::where('CA_id',$id)->get()->toArray();
    	if ($getCate) {
    		$request->validate([
            'CA_name' => 'required|max:20'
	        ],
	        [
	            'required' => 'Tên Không được để trống',
	            'max' => 'Tên Không được lớn hơn :max',
	        ]);
    	}else{
    		$request->validate([
            'CA_name' => 'required|unique:category|max:20'
	        ],
	        [
	            'required' => 'Tên Không được để trống',
	            'unique' => 'Tên Đã tồn tại',
	            'max' => 'Tên Không được lớn hơn :max',
	        ]);
    	}
     	
        // if ($validate->fails()) {
        //     // return redirect('category.add')->withErrors($validate)->withInput();
        //     return View('admin.category.add')->withErrors($validate);
        // }

        if(!Category::where('CA_id',$request->CA_parent)->first() && $request->CA_parent != 0) return redirect()->back();
        
        if ($getCate) {
        	$o_Cate = Category::find($id);
        }else{
        	$o_Cate = new Category();
        }

        $o_Cate->CA_parentId = $request->CA_parent;
        $o_Cate->CA_name = $request->CA_name;
        $o_Cate->CA_alias = str_slug($request->CA_name);
        $o_Cate->CA_status = isset($request->CA_status)?1:0;
        
    	$o_Cate->save();
    	
    	return redirect()->route('admin.cate.index');
    }
}

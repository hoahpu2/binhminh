<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Product_images;
use App\Http\Controllers\Controller;
use Input;
use File;
use Storage;
use Session;

class ProductController extends Controller
{
    public function index()
	{
        //test
		$a_Pro = Product::select()->get()->toArray();
		if ($a_Pro) {
			// foreach ($a_Pro as $key => $value) {
			// 	if ($value['CA_parentId'] == 0) {
			// 		$a_Pro[$key]['parentId'] = 'Danh mục cha';
			// 		continue;
				// }
				// $getCate = Category::select('CA_name')->where('CA_id', $value['CA_parentId'])->get()->toArray();
				// $a_Pro[$key]['parentId'] = $getCate[0]['CA_name'];
			// }
		}
		
		$asset = array('PR','pro.index');
    	return view('admin.product.index',compact('a_Pro','asset'));
	}

    public function getAdd()
    {
    	// dd($id);
    	// $a_CateOne = Category::select('CA_name','CA_id','CA_parentId','CA_status')->where('CA_id', $id)->get()->toArray();
    	$a_Cates = Category::select('CA_name','CA_id','CA_status')->get()->toArray();
    	$asset = array('PR','pro.add');
    	return view('admin.product.add',compact('asset','a_Cates'));
    }

    public function getEdit($id)
    {
        // dd($id);
        // $a_CateOne = Category::select('CA_name','CA_id','CA_parentId','CA_status')->where('CA_id', $id)->get()->toArray();
        $a_Pros = Product::find($id)->toArray();
        $a_Cates = Category::select('CA_name','CA_id','CA_status')->get()->toArray();
        // dd($a_Pros['PR_id']);
        $asset = array('PR','pro.add');
        return view('admin.product.edit',compact('asset','a_Pros','a_Cates'));
    }

    public function postAdd(Request $request)
    {
        // $file_name = $request->file('avatar')->getClientOriginalName();
        // dd($file_name);
        $file_names = str_random(4).$request->file('avatar')->getClientOriginalName();

        $product = new Product;
        $product->PR_name = $request->PR_name;
        $product->PR_CA_id = $request->CA_id;
        $product->PR_alias = str_slug($request->PR_name);
        $product->PR_price = $request->PR_price;
        $product->PR_quantity = $request->PR_quantity;
        $product->PR_SKU = $request->PR_SKU;
        $product->PR_avatar = $file_names;
        $product->PR_sortDesc = $request->PR_descript;
        $product->PR_sale = $request->PR_sale;
        $product->PR_view = 0;
        $product->PR_numberBuy = 0;
        $product->PR_content = $request->PR_detail;
        $product->PR_producer = $request->PR_producer;
        $product->PR_status = isset($request->PR_status)?1:0;
        $request->file('avatar')->move('resources/upload/product/',$file_names);
        $product->save();

        if(!empty($request->file('subavatar'))){
            foreach ($request->file('subavatar') as $value) {
                $product_img = new Product_images;
                if(isset($value)){
                    $detail_name = str_random(4).$value->getClientOriginalName();
                    $product_img->IM_url = $detail_name;
                    $product_img->IM_PR_id = $product->PR_id;
                    $value->move('resources/upload/product/images_detail/',$detail_name);
                    $product_img->save();
                }
            }
        }
        return redirect()->route('admin.product.index')->with(['flash_lever'=>'success','flash_message'=>'Thêm mới thành công']);
    }

    public function postEdit(Request $request,$id)
    {
        $product = Product::find($id);
        $product->PR_name = $request->PR_name;
        $product->PR_CA_id = $request->CA_id;
        $product->PR_alias = str_slug($request->PR_name);
        $product->PR_price = $request->PR_price;
        $product->PR_quantity = $request->PR_quantity;
        $product->PR_SKU = $request->PR_SKU;
        $product->PR_sortDesc = $request->PR_descript;
        $product->PR_sale = $request->PR_sale;
        $product->PR_view = 0;
        $product->PR_numberBuy = 0;
        $product->PR_content = $request->PR_detail;
        $product->PR_producer = $request->PR_producer;
        $product->PR_status = isset($request->PR_status)?1:0;

        if(!empty($request->file('avatar'))){
            $file_name = $request->file('avatar')->getClientOriginalName();
            $update = str_random(4).$file_name;
            $product->PR_avatar = $update;
            $request->file('avatar')->move('resources/upload/product/',$update);
        }
        
        if(!empty($request->file('subavatar'))){
            $product_detail = Product_images::select()->where('IM_PR_id',$id)->get()->toArray();
            foreach ($product_detail as $value) {
                File::delete('resources/upload/product/images_detail/'.$value['IM_url']);
            }
        }
        if(!empty($request->file('avatar'))){
            $product1 = Product::find($id);
            File::delete('resources/upload/product/'.$product1->PR_avatar);
        }
        
        $product->save();
        if(!empty($request->file('subavatar'))){
            foreach ($request->file('subavatar') as $value) {
                $product_img = new Product_images;
                if(isset($value)){
                    $uproduct = str_random(4).$value->getClientOriginalName();
                    $product_img->IM_url = $uproduct;
                    $product_img->IM_PR_id = $product->PR_id;
                    $value->move('resources/upload/product/images_detail/',$uproduct);
                    $product_img->save();
                }
            }
        }
    
        return redirect()->route('admin.product.index')->with(['flash_lever'=>'success','flash_message'=>'Sửa dữ liệu thành công']);
    }
}

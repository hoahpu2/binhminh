<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Catecontent;
use App\Product_images;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Input;
use File;
use Storage;
use Session;

class ProductController extends Controller
{
    public $treess = array();
    public function index()
	{
        //test

		$a_Pro = Product::paginate(10);

		if (!empty($a_Pro)) {
			foreach ($a_Pro as $key => $value) {
                // dd($value);
				$getCate = Category::select('CA_name')->where('CA_id', $value->PR_CA_id)->get()->toArray();
				$a_Pro[$key]->parentId = isset($getCate[0]['CA_name'])?$getCate[0]['CA_name']:'';
                $a_Pro[$key]->PR_en_id = Crypt::encryptString($value['PR_id']);
			}
		}

		$asset = array('PR','pro.index');
        $c_header = array('Quản lý sản phẩm','Danh sách sản phẩm');
    	return view('admin.product.index',compact('a_Pro','asset','c_header','linkProduct'));
	}

    public function getAdd()
    {
    	// dd($id);
    	// $a_CateOne = Category::select('CA_name','CA_id','CA_parentId','CA_status')->where('CA_id', $id)->get()->toArray();
    	$a_Cates = Category::select('CA_name','CA_id','CA_status','CA_parentId')->get()->toArray();
        $a_Catess = $this->showCategories($a_Cates);
        $a_Catecontent = Catecontent::select()->get()->toArray();

    	$asset = array('PR','pro.add','editer');
        $c_header = array('Quản lý sản phẩm','Thêm mới sản phẩm');
    	return view('admin.product.add',compact('asset','a_Catess','c_header','a_Catecontent'));
    }

    public function showCategories($categories, $parent_id = 0, $char = '')
    {
        foreach ($categories as $key => $item)
        {
            // Nếu là chuyên mục con thì hiển thị
            if ($item['CA_parentId'] == $parent_id)
            {
                if ($char == '') {
                    $this->treess[$item['CA_id']] = '<b>'.$char . $item['CA_name'].'</b>';
                }else{
                    $this->treess[$item['CA_id']] = $char . $item['CA_name'];
                }

                // Xóa chuyên mục đã lặp
                unset($categories[$key]);
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                $this->showCategories($categories, $item['CA_id'], $char.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            }
        }
        return $this->treess;
    }

    public function getEdit($id)
    {
        try {
            $decrypted = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            return redirect()->route('admin.error');
        }
        // dd($id);
        // $a_CateOne = Category::select('CA_name','CA_id','CA_parentId','CA_status')->where('CA_id', $id)->get()->toArray();
        $a_Pros = Product::find($decrypted)->toArray();
        $a_Cates = Category::select('CA_name','CA_id','CA_status','CA_parentId')->get()->toArray();
        $a_Cates = $this->showCategories($a_Cates);
        $a_Catecontent = Catecontent::select()->get()->toArray();
        // dd($a_Pros['PR_id']);
        $asset = array('PR','pro.add','editer');
        $c_header = array('Quản lý sản phẩm','Sửa sản phẩm');
        return view('admin.product.edit',compact('asset','a_Pros','a_Cates','c_header','a_Catecontent'));
    }

    public function postAdd(Request $request)
    {
        $request->validate([
            'PR_name' => 'required|unique:product',
            'avatar' => 'required'
        ],
        [
            'PR_name.required' => 'Tên Không được để trống',
            'PR_name.unique' => 'Tên sản phẩm đã tồn tại',
            'avatar.required' => 'Chọn ảnh Avatar'
        ]);
        $a_DataSize = getimagesize($request->file('avatar'));
        $a_width = (int)$a_DataSize[0];
        $a_height = (int)$a_DataSize[1];
        if ($a_height / $a_width !== 1) {
            return redirect()->back()->with(['avatar_error'=>'Vui lòng chọn ảnh đại diện theo tỷ lệ 1:1'])->withInput();
        }

        // $file_name = $request->file('avatar')->getClientOriginalName();
        // dd($file_name);
        $file_names = str_random(4).$request->file('avatar')->getClientOriginalName();

        $product = new Product;
        $product->PR_name = $request->PR_name;
        $product->PR_CA_id = $request->CA_id;
        $product->PR_CC_id = $request->CC_id;
        $product->PR_alias = str_slug($request->PR_name);
        $product->PR_price = isset($request->PR_price)?$request->PR_price:0;
        $product->PR_quantity = isset($request->PR_quantity)?$request->PR_quantity:0;
        $product->PR_SKU = isset($request->PR_SKU)?$request->PR_SKU:' ';
        $product->PR_avatar = $file_names;
        $product->PR_sortDesc = isset($request->PR_descript)?$request->PR_descript:' ';
        $product->PR_sale = isset($request->PR_sale)?$request->PR_sale:0;
        $product->PR_view = 0;
        $product->PR_numberBuy = 0;
        $product->PR_content = isset($request->PR_detail)?$request->PR_detail:' ';
        $product->PR_producer = isset($request->PR_producer)?$request->PR_producer:' ';
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
        if (!empty($request->file('avatar'))) {
            $a_DataSize = getimagesize($request->file('avatar'));
            $a_width = (int)$a_DataSize[0];
            $a_height = (int)$a_DataSize[1];
            if ($a_height / $a_width !== 1) {
                return redirect()->back()->with(['avatar_error'=>'Vui lòng chọn ảnh đại diện theo tỷ lệ 1:1'])->withInput();
            }
        }
        
        $product = Product::find($id);
        $product->PR_name = $request->PR_name;
        $product->PR_CA_id = $request->CA_id;
        $product->PR_CC_id = $request->CC_id;
        $product->PR_alias = str_slug($request->PR_name);
        $product->PR_price = isset($request->PR_price)?$request->PR_price:0;
        $product->PR_quantity = $request->PR_quantity;
        $product->PR_SKU = isset($request->PR_SKU)?$request->PR_SKU:' ';
        $product->PR_sortDesc = isset($request->PR_descript)?$request->PR_descript:' ';
        $product->PR_sale = isset($request->PR_sale)?$request->PR_sale:0;
        $product->PR_view = 0;
        $product->PR_numberBuy = 0;
        $product->PR_content = isset($request->PR_detail)?$request->PR_detail:' ';
        $product->PR_producer = isset($request->PR_producer)?$request->PR_producer:' ';
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

    public function getDelete($id)
    {
        try {
            $decrypted = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            return redirect()->route('admin.error');
        }

        $product = Product::find($decrypted);
        // dd($product->PR_id);
        File::delete('resources/upload/product/'.$product->PR_avatar);
        $product_Img = Product_images::select()->where('IM_PR_id', $product->PR_id)->get()->toArray();
        if (!empty($product_Img)) {
            foreach ($product_Img as $value) {
                $sub_IMG = Product_images::find($value['IM_id']);
                File::delete('resources/upload/product/images_detail/'.$product->PR_avatar);
                $sub_IMG->delete();
            }
        }
        
        $product->delete();
        return redirect()->route('admin.product.index')->with(['flash_lever'=>'success','flash_message'=>'Xóa dữ liệu thành công']);
    }
}

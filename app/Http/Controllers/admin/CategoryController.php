<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class CategoryController extends Controller
{
	public function index()
	{
        // dd(Crypt::encryptString(0));
        //test
		$a_Cate = Category::select('CA_name','CA_alias','CA_status','CA_parentId','created_at','updated_at','CA_id')->get()->toArray();
		if ($a_Cate) {
			foreach ($a_Cate as $key => $value) {
                $a_Cate[$key]['CA_en_id'] = Crypt::encryptString($value['CA_id']);
				if ($value['CA_parentId'] == 0) {
					$a_Cate[$key]['parentId'] = 'Danh mục cha';
					continue;
				}
				$getCate = Category::select('CA_name')->where('CA_id', $value['CA_parentId'])->get()->toArray();
				$a_Cate[$key]['parentId'] = $getCate[0]['CA_name'];
			}
		}
		// dd($a_Cate);
		$asset = array('DM','index');
        $c_header = array('Quản lý danh mục','Danh sách danh mục');
    	return view('admin.category.index',compact('a_Cate','asset','c_header'));
	}

    public function getAdd()
    {
     //    try {
     //        $decrypted = Crypt::decryptString($id);
     //    } catch (DecryptException $e) {
     //        return redirect()->route('admin.error');
     //    }
    	// // dd($id);
    	// $a_CateOne = Category::select('CA_name','CA_id','CA_parentId','CA_status')->where('CA_id', $decrypted)->get()->toArray();
        // dd($a_CateOne);
        // if (empty($a_CateOne)) {
        //     $a_CateOne[0]['CA_parentId'] = 0;
        //     $a_CateOne[0]['CA_status'] = 0;
        // }
        // $a_CateOne[0]['CA_en_id'] = $id;
    	$a_Cates = Category::select('CA_name','CA_id','CA_status')->where('CA_parentId', 0)->get()->toArray();
    	$asset = array('DM','add');
        $c_header = array('Quản lý danh mục','Thêm mới danh mục','Vui lòng không để trống những trường (<span style="color:red">*</span>)');
    	return view('admin.category.add',compact('a_Cates','asset','c_header'));
    }

    public function getEdit($id)
    {
        try {
            $decrypted = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            return redirect()->route('admin.error');
        }
        // dd($id);
        $a_CateOne = Category::select('CA_name','CA_id','CA_parentId','CA_status')->where('CA_id', $decrypted)->get()->toArray();
        // dd($a_CateOne);
        $a_CateOne[0]['CA_en_id'] = $id;
        $a_Cates = Category::select('CA_name','CA_id','CA_status')->where('CA_parentId', 0)->get()->toArray();
        $asset = array('DM','add');
        $c_header = array('Quản lý danh mục','Sửa danh mục','Vui lòng không để trống những trường (<span style="color:red">*</span>)');
        return view('admin.category.edit',compact('a_Cates','asset','a_CateOne','c_header'));
    }

    public function postAdd(Request $request)
    {
		$request->validate([
        'CA_name' => 'required|unique:category|max:20'
        ],
        [
            'required' => 'Tên Không được để trống',
            'unique' => 'Tên Đã tồn tại',
            'max' => 'Tên Không được lớn hơn :max',
        ]);
    	

        if(!Category::where('CA_id',$request->CA_parent)->first() && $request->CA_parent != 0) return redirect()->back();
        
        $o_Cate = new Category();

        $o_Cate->CA_parentId = $request->CA_parent;
        $o_Cate->CA_name = $request->CA_name;
        $o_Cate->CA_alias = str_slug($request->CA_name);
        $o_Cate->CA_status = isset($request->CA_status)?1:0;
        
    	$o_Cate->save();
    	
    	return redirect()->route('admin.cate.index');
    }

    public function postEdit(Request $request,$id)
    {
        try {
            $decrypted = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            return redirect()->route('admin.error');
        }
        $getCate = Category::where('CA_id',$decrypted)->get()->toArray();
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

        if(!Category::where('CA_id',$request->CA_parent)->first() && $request->CA_parent != 0) return redirect()->back();
        
        if ($getCate) {
            $o_Cate = Category::find($decrypted);
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

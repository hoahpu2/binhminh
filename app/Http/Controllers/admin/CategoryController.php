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
		$a_Cate = Category::select()->get()->toArray();
		if ($a_Cate) {
			foreach ($a_Cate as $key => $value) {
                $a_Cate[$key]['CA_en_id'] = Crypt::encryptString($value['CA_id']);
				if ($value['CA_parentId'] == 0) {
					$a_Cate[$key]['parentId'] = '';
					continue;
				}
				$getCate = Category::select('CA_name')->where('CA_id', $value['CA_parentId'])->get()->toArray();
				$a_Cate[$key]['parentId'] = isset($getCate[0]['CA_name'])?$getCate[0]['CA_name']:'';
			}
		}
		
		$asset = array('DM','index');
        $c_header = array('Quản lý danh mục','Danh sách danh mục');
    	return view('admin.category.index',compact('a_Cate','asset','c_header'));
	}

    public function getAdd()
    {
        // $a_Cates = Category::select('CA_name','CA_id','CA_status','CA_parentId')->where('CA_number', '!=', 3)->get()->toArray();
        
    	$a_Catess = Category::select('CA_name','CA_id','CA_status','CA_parentId')->where('CA_number', '!=', 3)->get()->toArray();
        $a_Cates = $this->showCategories($a_Catess);
        // dd($a_Cates);
    	$asset = array('DM','add');
        $c_header = array('Quản lý danh mục','Thêm mới Menu','Vui lòng không để trống những trường (<span style="color:red">*</span>)');
    	return view('admin.category.add',compact('a_Cates','asset','c_header'));
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
        
        $a_CateOne = Category::select()->where('CA_id', $decrypted)->get()->toArray();
        
        $a_CateOne[0]['CA_en_id'] = $id;
        $a_Catess = Category::select('CA_name','CA_id','CA_status','CA_parentId')->where('CA_number', '!=', 3)->get()->toArray();
        $a_Cates = $this->showCategories($a_Catess);
        $asset = array('DM','add');
        $c_header = array('Quản lý danh mục','Sửa danh mục','Vui lòng không để trống những trường (<span style="color:red">*</span>)');
        return view('admin.category.edit',compact('a_Cates','asset','a_CateOne','c_header'));
    }

    public function postAdd(Request $request)
    {
		$request->validate([
            'CA_name' => 'required|unique:category|max:20',
        ],
        [
            'CA_name.required' => 'Tên Không được để trống',
            'CA_name.unique' => 'Tên Đã tồn tại',
            'CA_name.max' => 'Tên Không được lớn hơn :max',
        ]);
    	

        if(!Category::where('CA_id',$request->CA_parent)->first() && $request->CA_parent != 0) return redirect()->back();
        
        $o_Cate = new Category();

        $o_Cate->CA_parentId = $request->CA_parent;
        $o_Cate->CA_name = $request->CA_name;
        $o_Cate->CA_location = $request->CA_location;
        if ($request->CA_parent == 0) {
            $o_Cate->CA_number = 1;
        }elseif($request->CA_parent != 0){
            $checkCate = Category::where('CA_id',$request->CA_parent)->first();
            $o_Cate->CA_number = $checkCate->CA_number == 1 ? 2 : 3;
        }
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
        if ($request->CA_parent == 0) {
            if ($request->CA_number != Category::find($decrypted)->CA_number) {
                $unique = "unique:category";
            } else {
                $unique = '';
            }
        }else{
            $unique = '';
        }
        if ($getCate) {
            $request->validate([
                'CA_name' => 'required|max:20',
                'CA_number' => $unique,
            ],
            [
                'CA_name.required' => 'Tên Không được để trống',
                'CA_name.max' => 'Tên Không được lớn hơn :max',
                'CA_number.unique' => 'Vị trí đã tồn tại',
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

        if (Category::find($decrypted)->CA_name != $request->CA_name) {
            if(Category::where('CA_alias', str_slug($request->CA_name))->first()) return redirect()->back()->with(['flash_lever'=>'danger','flash_message'=>'Tên Menu đã tồn tại']);
        }
        
        if ($getCate) {
            $o_Cate = Category::find($decrypted);
        }else{
            $o_Cate = new Category();
        }

        $o_Cate->CA_parentId = $request->CA_parent;
        $o_Cate->CA_name = $request->CA_name;
        $o_Cate->CA_location = $request->CA_location;
        if ($request->CA_parent == 0) {
            $o_Cate->CA_number = 1;
        }elseif($request->CA_parent != 0){
            $checkCate = Category::where('CA_id',$request->CA_parent)->first();
            $o_Cate->CA_number = $checkCate->CA_number == 1 ? 2 : 3;
        }
        $o_Cate->CA_alias = str_slug($request->CA_name);
        $o_Cate->CA_status = isset($request->CA_status)?1:0;
        
        $o_Cate->save();
        
        return redirect()->route('admin.cate.index');
    }

    public function getDelete($id)
    {
        try {
            $decrypted = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            return redirect()->route('admin.error');
        }

        $cate = Category::find($decrypted);
        $cate->delete();
        return redirect()->route('admin.cate.index');
    }
}

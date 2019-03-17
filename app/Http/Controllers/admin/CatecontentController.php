<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Catecontent;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class CatecontentController extends Controller
{
    public function index()
	{
        // dd(Crypt::encryptString(0));
        //test
		$a_Cate = Catecontent::select()->get()->toArray();
		if ($a_Cate) {
			foreach ($a_Cate as $key => $value) {
                $a_Cate[$key]['CC_en_id'] = Crypt::encryptString($value['CC_id']);
			}
		}
		// dd($a_Cate);
		$asset = array('Mn','cate.index');
        $c_header = array('Quản lý danh mục','Danh sách danh mục');
    	return view('admin.catecontent.index',compact('a_Cate','asset','c_header'));
	}

    public function getAdd()
    {
    	$a_Cates = Catecontent::select()->get()->toArray();
    	$asset = array('Mn','cate.add');
        $c_header = array('Quản lý danh mục','Thêm mới Menu','Vui lòng không để trống những trường (<span style="color:red">*</span>)');
    	return view('admin.catecontent.add',compact('a_Cates','asset','c_header'));
    }

    public function getEdit($id)
    {
        try {
            $decrypted = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            return redirect()->route('admin.error');
        }
        // dd($id);
        $a_CateOne = Catecontent::select()->where('CC_id', $decrypted)->get()->toArray();
        // dd($a_CateOne);
        $a_CateOne[0]['CC_en_id'] = $id;
        $asset = array('Mn','cate.add');
        $c_header = array('Quản lý danh mục','Sửa danh mục','Vui lòng không để trống những trường (<span style="color:red">*</span>)');
        return view('admin.catecontent.edit',compact('asset','a_CateOne','c_header'));
    }

    public function postAdd(Request $request)
    {
		$request->validate([
            'CC_name' => 'required|unique:catecontent|max:20'
        ],
        [
            'required' => 'Tên Không được để trống',
            'unique' => 'Tên Đã tồn tại',
            'max' => 'Tên Không được lớn hơn :max',
        ]);
        
        $o_Cate = new Catecontent();

        $o_Cate->CC_name = $request->CC_name;
        $o_Cate->CC_alias = str_slug($request->CC_name);
        $o_Cate->CC_status = isset($request->CC_status)?1:0;
        
    	$o_Cate->save();
    	
    	return redirect()->route('admin.catecontent.index');
    }

    public function postEdit(Request $request,$id)
    {
        try {
            $decrypted = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            return redirect()->route('admin.error');
        }
        $getCate = Catecontent::where('CC_id',$decrypted)->get()->toArray();
        // dd($getCate);
        if ($getCate) {
            $request->validate([
	            'CC_name' => 'required|max:20'
	            ],
	            [
                'required' => 'Tên Không được để trống',
                'max' => 'Tên Không được lớn hơn :max',
            ]);
        }
        
        if ($getCate) {
            $o_Cate = Catecontent::find($decrypted);
        }
/*
FPT.HoaNV12
 */
        $o_Cate->CC_name = $request->CC_name;
        $o_Cate->CC_alias = str_slug($request->CC_name);
        $o_Cate->CC_status = isset($request->CC_status)?1:0;
        
        $o_Cate->save();
        
        return redirect()->route('admin.catecontent.index');
    }

    public function getDelete($id)
    {
        try {
            $decrypted = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            return redirect()->route('admin.error');
        }

        $o_Cate = Catecontent::find($decrypted);
        $o_Cate->delete();
        return redirect()->route('admin.catecontent.index');
    }
}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Slider;
use File;

class SliderController extends Controller
{
	public function index()
	{
		$a_Slider = Slider::all();
        // dd($a_Slider);
        if ($a_Slider) {
            foreach ($a_Slider as $key=>$value) {
                // dd($value->SL_id);
                $a_Slider[$key]->SL_en_id = Crypt::encryptString($value->SL_id);
            }
        }
        // dd($a_Slider);
        // dd($a_Slider[0]->SL_en_id);
		$asset = array('SL','index');
        $c_header = array('Quản lý Slider','Danh sách slider');
		return view('admin.slider.index',compact('asset','a_Slider','c_header'));
	}
    
    public function getAdd()
    {
    	$asset = array('SL','add');
        $c_header = array('Quản lý Slider','Thêm mới Dự án');
    	return view('admin.slider.add',compact('asset','c_header'));
    }

    public function postAdd(Request $request)
    {
        $a_DataSize = getimagesize($request->file('SL_url'));
        $a_width = (int)$a_DataSize[0];
        $a_height = (int)$a_DataSize[1];
        // if ($a_width / $a_height !== 2) {
        //     return redirect()->back()->with(['avatar_error'=>'Vui lòng chọn ảnh Slider theo tỷ lệ 2:1'])->withInput();
        // }
        // dd($request->file('SL_url'));
        $profile = new Slider();
        $profile->SL_alt = $request->SL_alt;
        $profile->SL_status = isset($request->SL_status)?1:0;
        $profile->SL_detail = $request->SL_detail ? $request->SL_detail :'';

        if(!empty($request->file('SL_url'))){
            $file_name = $request->file('SL_url')->getClientOriginalName();
            $file_names = str_random(4).$file_name;
            $profile->SL_url = $file_names;
            $request->file('SL_url')->move('resources/upload/slider/', $file_names);
        }
        
        $profile->save();
        return redirect()->route('admin.slider.index')->with(['flash_lever'=>'success','flash_message'=>'Thêm mới thành công']);
    }

    public function postEdit(Request $request,$id)
    {
        try {
            $decrypted = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            return redirect()->route('admin.error');
        }
        if (!empty($request->file('SL_url'))) {
            $a_DataSize = getimagesize($request->file('SL_url'));
            $a_width = (int)$a_DataSize[0];
            $a_height = (int)$a_DataSize[1];
            // if ($a_width / $a_height !== 2) {
            //     return redirect()->back()->with(['avatar_error'=>'Vui lòng chọn ảnh Slider theo tỷ lệ 2:1'])->withInput();
            // }
        }
        
        $slider = Slider::find($decrypted);
        $slider->SL_alt = $request->SL_alt;
        $slider->SL_status = isset($request->SL_status)?1:0;
        $slider->SL_detail = $request->SL_detail ? $request->SL_detail :'';

        if(!empty($request->file('SL_url'))){
            File::delete('resources/upload/slider/'.$slider->SL_url);
            $file_name = $request->file('SL_url')->getClientOriginalName();
            $file_names = str_random(4).$file_name;
            $slider->SL_url = $file_names;
            $request->file('SL_url')->move('resources/upload/slider/', $file_names);
        }
        
        $slider->save();
        return redirect()->route('admin.slider.index')->with(['flash_lever'=>'success','flash_message'=>'Thêm mới thành công']);
    }

    public function getEdit($id)
    {
        try {
            $decrypted = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            return redirect()->route('admin.error');
        }

        $slider = Slider::find($decrypted);
        $slider->SL_en_id = $id;

        $asset = array('SL','add');
        $c_header = array('Quản lý Slider','Sửa Dự án');
        return view('admin.slider.edit',compact('asset','slider','c_header'));
    }

    public function getDelete($id)
    {
        try {
            $decrypted = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            return redirect()->route('admin.error');
        }

        $slider = Slider::find($decrypted);
        File::delete('resources/upload/slider/'.$slider->SL_url);
        $slider->delete();
        return redirect()->route('admin.slider.index')->with(['flash_lever'=>'success','flash_message'=>'Xóa dữ liệu thành công']);
    }
}

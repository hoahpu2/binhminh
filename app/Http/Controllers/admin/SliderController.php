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
        $c_header = array('Quản lý Slider','Danh sách Slider');
		return view('admin.slider.index',compact('asset','a_Slider','c_header'));
	}
    
    public function getAdd()
    {
    	$asset = array('SL','add');
        $c_header = array('Quản lý Slider','Thêm mới Slider');
    	return view('admin.slider.add',compact('asset','c_header'));
    }

    public function postAdd(Request $request)
    {
        // dd($request->file('SL_url'));
        $profile = new Slider();
        $profile->SL_alt = $request->SL_alt;
        $profile->SL_status = isset($request->SL_status)?1:0;

        // dd($request->file('avatar'));
        if(!empty($request->file('SL_url'))){
            // dd($user->avatar);
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
        // dd($id);
        $slider = Slider::find($decrypted);
        $slider->SL_alt = $request->SL_alt;
        // dd($slider);
        $slider->SL_status = isset($request->SL_status)?1:0;

        // dd($request->file('avatar'));
        if(!empty($request->file('SL_url'))){
            // dd($user->avatar);
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
        // $aaa = Crypt::encryptString('hoa');
        // echo decrypt($aaa);dd();
        try {
            $decrypted = Crypt::decryptString($id);
        } catch (DecryptException $e) {
            return redirect()->route('admin.error');
        }
        // print_r(decrypt($id));die;
        $slider = Slider::find($decrypted);
        $slider->SL_en_id = $id;
        // dd($slider);
        $asset = array('SL','add');
        $c_header = array('Quản lý Slider','Sửa Slider');
        return view('admin.slider.edit',compact('asset','slider','c_header'));
    }
}

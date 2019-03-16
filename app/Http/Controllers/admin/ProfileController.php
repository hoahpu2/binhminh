<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use File;

class ProfileController extends Controller
{
    public function index($id)
    {
    	// dd(bcrypt('hoa1234'));
    	$user = User::find(1);
    	// dd($user);
        $asset = array('','');
        $c_header = array('Quản lý Profile','Sửa Profile');
    	return view('admin.profile.index',compact('asset','user','c_header'));
    }

    public function postAdd(Request $request)
    {
        if (isset($request->old_password) || isset($request->password) || isset($request->re_password)) {
            $request->validate([
                    'email' => 'required|max:20',
                    'old_password' => 'required|min:6',
                    'password' => 'required|min:6',
                    're_password' => 'required|same:password',
                    'avatar' => 'size:5000',
                ],
                [
                    'email.required' => 'Email Không được để trống',
                    'email.max' => 'Email Không được lớn hơn :max',
                    'old_password.required' => 'Mật khẩu cũ Không được để trống',
                    'old_password.min' => 'Mật khẩu cũ phải lớn hơn 6 ký tự',
                    'password.required' => 'Mật khẩu mới Không được để trống',
                    'password.min' => 'Mật khẩu mới phải lớn hơn 6 ký tự',
                    're_password.required' => 'Mật khẩu nhập lại Không được để trống',
                    're_password.same' => 'Mật khẩu nhập lại phải giống mật khẩu mới',
                ]);
            $user = User::select()->where('password',bcrypt($request->old_password))->get();
            // dd(Auth::attempt(['email'=>$request->email,'password'=>$request->old_password]));
            // dd($user->getAuthPassword());
            if (!Auth::attempt(['email'=>$request->email,'password'=>$request->old_password])) {
                return redirect()->route('admin.user.index',$request->id)->with(['old_passwords'=>'Mật khẩu cũ không đúng']);
            }
        }

        if (!empty($request->file('avatar'))) {
            $request->validate([
                'avatar' => 'max:5000',
            ],[
                'avatar.max' => 'Ảnh đại diện không nặng quá 5Mb',
            ]);
        }

    	$user = User::find($request->id);
    	$user->name = $request->name;
		$user->email = $request->email;
        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

		// dd($request->file('avatar'));
		if(!empty($request->file('avatar'))){
			// dd($user->avatar);
			File::delete('resources/upload/useradmin/'.$user->avatar);
			$file_name = $request->file('avatar')->getClientOriginalName();
			$file_names = str_random(4).$file_name;
			$user->avatar = $file_names;
			$request->file('avatar')->move('resources/upload/useradmin/',$file_names);
		}
		
		$user->save();
		return redirect()->route('admin.user.index',$request->id)->with(['flash_lever'=>'success','flash_message'=>'Cập nhật thành công']);
    }

    public function postdangnhapAdmin (Request $request)
    {
    	// dd('sss');
    	$rules = [
    		'email' =>'required|email',
    		'password' => 'required|min:8'
    	];
    	$messages = [
    		'email.required' => 'Email là trường bắt buộc',
    		'email.email' => 'Email không đúng định dạng',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
    	];
    	// dd('sss');
    	if (Auth::attempt(['email'=>$request->username,'password'=>$request->password])) {
    		return redirect()->route('admin.product.index');
    	} else {
    		return redirect()->route('admin-login');
    	}
    }

    public function getdangxuatAdmin ()
    {
    	Auth::logout();
    	// Session::flush();
    	return redirect()->route('admin-login');
    }

    public function getPageError()
    {
        $asset = array('','','');
        $c_header = array('Page Not found','404 Error Page');
        return view('admin.error.index',compact('asset','c_header'));
    }
}

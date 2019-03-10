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
    	$user = User::select()->get()->toArray();
    	// dd($user);
    	$asset = array('','');
    	return view('admin.profile.index',compact('asset','user'));
    }

    public function postAdd(Request $request)
    {
        if (isset($request->old_password) || isset($request->password) || isset($request->re_password)) {
            $request->validate([
                'email' => 'required|max:20',
                'old_password' => 'required|min:8',
                'password' => 'required|min:8',
                're_password' => 'required|same:password',
                ],
                [
                    'required' => 'Email Không được để trống',
                    'max' => 'Email Không được lớn hơn :max',
                ]);
            $user = User::select()->where('password',bcrypt($request->old_password))->get();
            if (empty($user)) {
                return redirect()->route('admin.user.index',$request->id)->with(['flash_lever'=>'false','flash_message'=>'Mật khẩu cũ không đúng']);
            }
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
		return redirect()->route('admin.user.index',$request->id)->with(['flash_lever'=>'success','flash_message'=>'Thêm mới thành công']);
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
        return view('admin.error.index',compact('asset'));
    }
}

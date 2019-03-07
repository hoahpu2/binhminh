<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
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
    	$user = User::find($request->id);
    	$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);

		// dd($request->file('avatar'));
		if(!empty($request->file('avatar'))){
			// dd($user->avatar);
			File::delete('resources/upload/useradmin/'.$user->avatar);
			$file_name = $request->file('avatar')->getClientOriginalName();
			$file_names = str_random(4).$file_name;
			$user->avatar = $file_names;
			$request->file('avatar')->move('resources/upload/useradmin/',$file_names);
		} else {
			//$user->avatar = 'defaull.png';
		}
		
		$user->save();
		return redirect()->route('admin.user.index',$request->id)->with(['flash_lever'=>'success','flash_message'=>'Thêm mới thành công']);
    }
}

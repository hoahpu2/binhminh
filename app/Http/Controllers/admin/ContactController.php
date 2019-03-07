<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{
    public function index($id)
    {
    	$contact = Contact::select()->get()->toArray();
    	$asset = array('CTT','');
    	return view('admin.contact.index',compact('asset','contact'));
    }

    public function postAdd(Request $request)
    {
    	// dd('aaaaa');
    	$user = Contact::find($request->id);
    	// $user = new Contact();
    	$user->CT_number = $request->CT_number;
		$user->CT_address = $request->CT_address;
		$user->CT_linkFace = $request->CT_linkFace;
		$user->CT_linkYoutu = $request->CT_linkYoutu;
		$user->CT_linkGoogle = $request->CT_linkGoogle;
		$user->CT_Email = $request->CT_Email;
		
		$user->save();
		return redirect()->route('admin.contact.index',$request->id)->with(['flash_lever'=>'success','flash_message'=>'Thêm mới thành công']);
    }
}

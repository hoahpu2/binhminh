<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Contact;
use App\ContactCustomer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class ContactController extends Controller
{
    public function index($id)
    {
    	$contact = Contact::select()->get()->toArray();
    	$asset = array('CTT','','editer');
        $c_header = array('Quản lý liên hệ','Quản lý liên hệ');
    	return view('admin.contact.index',compact('asset','contact','c_header'));
    }

	public function indexCus()
	{
		$c_header = array('Quản lý liên hệ','Liên hệ từ khách hàng');
		$asset = array('CTTU','','editer');
		$contact = ContactCustomer::orderBy('id','DESC')->get()->toArray();
		return view('admin.contact.indexcu',compact('asset','contact','c_header'));
	}

	public function getDetail($id)
	{
		$c_header = array('Quản lý liên hệ','Liên hệ từ khách hàng');
		$asset = array('CTTU','','editer');
		$contact = ContactCustomer::where('id', $id)->orderBy('id','DESC')->first();
		return view('admin.contact.detail',compact('asset','contact','c_header'));
	}

    public function postAdd(Request $request)
    {
    	$user = Contact::find($request->id);
    	// $user = new Contact();
    	$user->CT_number = $request->CT_number;
		$user->CT_address = $request->CT_address;
		$user->CT_linkFace = $request->CT_linkFace;
		$user->CT_linkYoutu = $request->CT_linkYoutu;
		$user->CT_linkGoogle = $request->CT_linkGoogle;
		$user->CT_Email = $request->CT_Email;
        $user->CT_content = isset($request->CT_content)?$request->CT_content:' ';
		
		$user->save();
		return redirect()->route('admin.contact.index',$request->id)->with(['flash_lever'=>'success','flash_message'=>'Thêm mới thành công']);
    }
}

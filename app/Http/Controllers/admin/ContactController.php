<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Contact;
use App\Home;
use App\Category;
use App\ContactCustomer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

use function GuzzleHttp\json_decode;

class ContactController extends Controller
{
	public function index($id)
	{
		$contact = Contact::select()->get()->toArray();
		$asset = array('CTT', '', 'editer');
		$c_header = array('Quản lý liên hệ', 'Quản lý liên hệ');
		return view('admin.contact.index', compact('asset', 'contact', 'c_header'));
	}

	public function indexCus()
	{
		$c_header = array('Quản lý liên hệ', 'Liên hệ từ khách hàng');
		$asset = array('CTTU', '', 'editer');
		$contact = ContactCustomer::orderBy('id', 'DESC')->get()->toArray();
		return view('admin.contact.indexcu', compact('asset', 'contact', 'c_header'));
	}

	public function getDetail($id)
	{
		$c_header = array('Quản lý liên hệ', 'Liên hệ từ khách hàng');
		$asset = array('CTTU', '', 'editer');
		$contact = ContactCustomer::where('id', $id)->orderBy('id', 'DESC')->first();
		return view('admin.contact.detail', compact('asset', 'contact', 'c_header'));
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
		$user->CT_content = isset($request->CT_content) ? $request->CT_content : ' ';

		$user->save();
		return redirect()->route('admin.contact.index', $request->id)->with(['flash_lever' => 'success', 'flash_message' => 'Thêm mới thành công']);
	}

	public function sanphamHome(Request $request)
	{
		$contact = Home::find(1);
		$method = $request->method();
		if ($request->isMethod('post')) {
			if(!empty($request->CA_alias)){
				$vany = [];
				foreach($request->CA_alias as $key => $value){
					$vany[$key+1] = $value;
				}
			}
			$contact->CA_name = !empty($request->CA_name) ? $request->CA_name : '';
			$contact->CA_alias = !empty($request->CA_alias) ? json_encode($vany) : '';
			$contact->CA_status = 1;
			$contact->save();
			return redirect()->route('admin.sanphamHome.index');
		}
		$contact->CA_alias = !empty($contact->CA_alias) ? $this->json_decode($contact->CA_alias) : [];
		
		$a_GetCategory = $this->getCategory();
		$c_header = array('Quản lý Sản phẩm nổi bật', 'Sản Phẩm nổi bật');
		$asset = array('SP_H', '', 'editer');
		return view('admin.contact.home', compact('asset', 'contact', 'c_header', 'a_GetCategory', 'contact'));
	}

	public function getCategory($parent = 0)
	{
		$a_catePa = Category::where('CA_parentId', $parent)->orderBy('CA_location')->get()->toArray();
		if (!empty($a_catePa)) {
			foreach ($a_catePa as $key => $value) {
				$a_catePa[$key]['subMenu'] = $this->getCategory($value['CA_id']);
				$a_catePa[$key]['list_sub_menu'] = $this->listSubMenu($value['CA_id']);
			}
		}
		return $a_catePa;
	}

	public function listSubMenu($ca_id)
	{
		$a_catePa = Category::select('CA_id')->where('CA_parentId', $ca_id)->get()->toArray();
		if (!empty($a_catePa)) {
			$return = [];
			foreach ($a_catePa as $a_catePas) {
				$return[] = $a_catePas['CA_id'];
				$returnss = $this->listSubMenu($a_catePas['CA_id']);
				if (!empty($returnss)) {
					foreach ($returnss as $returnsss) {
						$return[] = $returnsss;
					}
				}
			}
			return $return;
		}
		return [];
	}

	function json_decode($json)
	{
		$comment = false;
		$out = '$x=';

		for ($i = 0; $i < strlen($json); $i++) {
			if (!$comment) {
				if ($json[$i] == '{' || $json[$i] == '[')        $out .= ' array(';
				else if ($json[$i] == '}' || $json[$i] == ']')    $out .= ')';
				else if ($json[$i] == ':')    $out .= '=>';
				else                         $out .= $json[$i];
			} else $out .= $json[$i];
			if ($json[$i] == '"')    $comment = !$comment;
		}
		eval($out . ';');
		return $x;
	}

}

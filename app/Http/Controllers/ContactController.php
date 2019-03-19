<?php

namespace App\Http\Controllers;
use App\Category;
use App\CustomerContact;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

class ContactController extends Controller
{
    public function index(UrlGenerator $url)
    {
        // dd($url->to('/'));
        $category = Category::where("CA_status",1)->where('CA_parentId',0)->orderBy('CA_number','ASC')->take(5)->get();
        if (!empty($category)) {
            foreach ($category as $key => $value) {
                if ($value->CA_parentId == 0) {
                    $category[$key]->sub_category = Category::where('CA_parentId',$value->CA_id)->where("CA_status",1)->get()->toArray();
                }
            }
        }

        $contact = Contact::find(1);
        return view('sub.client.contact',compact('category','contact'));

    }
    public function postContact(Request $request){
        $request->validate([
            'CU_name' =>'required',
                'CU_title'=>'required',
                'CU_phone'=>'required|numeric'
        ],
        [
            'CU_name.required'=> "Vui lòng nhập tên!",
            'CU_title.required'=>"Vui lòng nhập tiêu đề",
            'CU_phone.required'=>"Vui lòng nhập số điện thoại",
            'CU_phone.numeric'=>"Vui lòng nhập đúng định dạng",
        ]
        );
        $product = new CustomerContact();
        $product->CU_name = $_POST['CU_name'];
        $product->CU_title = $_POST['CU_title'];
        $product->CU_address = $_POST['CU_address'];
        $product->CU_phone = $_POST['CU_phone'];
        $product->CU_email = $_POST['CU_email'];
        $product->CU_content =$_POST['CU_content'];
        $product->save();
        return redirect()->route('customer-contact')->with(['flash_lever'=>'success','flash_message'=>'Cảm ơn quý khách đã để lại thông tin, chúng tôi sẽ phản hồi cho quý khách sớm nhất !']);

    }
}

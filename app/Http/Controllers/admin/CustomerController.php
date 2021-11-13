<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CustomerContact;

class CustomerController extends Controller
{
    public function index()
    {
    	$asset = array('Req','');
    	$a_Cate = CustomerContact::where('CU_status',1)->get();
    	$i_total = $a_Cate->count();
    	$c_header = array('Quản lý liện hệ từ khách hàng','Yêu cầu mới');
    	return view('admin.customer.index',compact('asset','a_Cate','c_header','i_total'));
    }

    public function detail($id)
    {
    	$asset = array('Req','');
    	$a_Cate = CustomerContact::find($id);
    	$a_Cate->CU_status = 0;
    	$a_Cate->save();
    	$a_Cates = CustomerContact::where('CU_status',1)->get();
    	$i_total = $a_Cates->count();
    	$c_header = array('Quản lý liện hệ từ khách hàng','Yêu cầu mới','Thông tin chi tiết');
    	return view('admin.customer.detail',compact('asset','a_Cate','c_header','i_total'));
    }

    public function preview()
    {
    	$asset = array('Req','');
    	$a_Cate = CustomerContact::where('CU_status',0)->get()->toArray();
    	// dd($a_Cate);
    	$a_Cates = CustomerContact::where('CU_status',1)->get();
    	$i_total = $a_Cates->count();
    	$c_header = array('Quản lý liện hệ từ khách hàng','Yêu cầu đã xem');
    	return view('admin.customer.preview',compact('asset','a_Cate','c_header','i_total'));
    }

    public function clickshow($id)
    {
    	// $asset = array('Req','');
    	$a_Cate = CustomerContact::find($id);
    	$a_Cate->CU_status = 1;
    	$a_Cate->save();
    	// $c_header = array('Quản lý liện hệ từ khách hàng','Yêu cầu đã xem','Thông tin chi tiết');
    	return redirect()->route('admin.request.preview');
    }

    public function ajaxx()
    {
    	$a_Cates = CustomerContact::where('CU_status',1)->get();
    	$i_total = $a_Cates->count();
    	return response()->json([
		    'i_total' => $i_total,
		]);
    }
}

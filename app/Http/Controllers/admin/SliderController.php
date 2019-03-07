<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
	public function index()
	{
		$a_Slider = array();
		$asset = array('SL','index');
		return view('admin.slider.index',compact('asset','a_Slider'));
	}
    
    public function getAdd()
    {
    	$asset = array('SL','add');
    	return view('admin.slider.add',compact('asset'));
    }
}

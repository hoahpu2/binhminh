<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index($id)
    {
    	$asset =array('','');
    	return view('admin.profile.index',compact('asset'));
    }
}

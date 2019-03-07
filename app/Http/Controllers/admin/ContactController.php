<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index($id)
    {
    	$asset = array('CTT','');
    	return view('admin.contact.index',compact('asset'));
    }
}

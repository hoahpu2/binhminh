<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Category;
use App\Catecontent;
use App\Product_images;
use App\News;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Input;
use File;
use Storage;
use Session;

class NewsController extends Controller
{
   public function index()
	{
        $news = News::paginate(10);
        $c_header = array('Quản lý tin tức','Danh sách tin tức');
        $asset = array('News','index.news',);
    	return view('admin.news.index',compact('news','asset','c_header'));
	}
	public function getAdd(){
        $c_header = array('Quản lý tin tức','Thêm mới tin tức');
        $asset = array('News','add.news','editer');
        return view('admin.news.add',compact('asset','c_header'));
    }
    public function postAdd(Request $request)
    {
        $request->validate([
            'N_title' => 'required|unique:news',
            'avatar' => 'required'
        ],
            [
                'N_title.required' => 'Tên Không được để trống',
                'N_title.unique' => 'Tên tin tức đã tồn tại',
                'avatar.required' => 'Chọn ảnh Avatar'
            ]);
        $file_names = str_random(4).$request->file('avatar')->getClientOriginalName();

        $news = new News;
        $news->N_title = $request->N_title;
        
        $news->N_alias = str_slug($request->N_title).'-'.date('dmyhis');
        $news->N_avatar = $file_names;
        $news->N_content = isset($request->N_content)?$request->N_content:' ';
        $news->N_status = isset($request->N_status)?1:0;
        $request->file('avatar')->move('resources/upload/news/',$file_names);
        $news->save();
        return redirect()->route('admin.news.index')->with(['flash_lever'=>'success','flash_message'=>'Thêm mới thành công']);
    }
    public function getEdit($id)
    {
        $news = News::find($id);
        $asset = array('News','add.news','editer');
        $c_header = array('Quản lý tin tức','Sửa tin tức');
        return view('admin.news.edit',compact('asset','news','c_header'));
    }
    public function postEdit(Request $request)
    {
        $request->validate([
            'N_title' => 'required',
        ],
            [
                'N_title.required' => 'Tên Không được để trống',
            ]
        );
        $news = News::find($request->N_id);
        $news->N_title = $request->N_title;
        $news->N_alias = str_slug($request->N_title).'-'.date('dmyhis');
        $news->N_content = isset($request->N_content)?$request->N_content:' ';
        $news->N_status = isset($request->N_status)?1:0;
        if(!empty($request->file('avatar'))){
            $file_name = $request->file('avatar')->getClientOriginalName();
            $update = str_random(4).$file_name;
            $news->N_avatar = $update;
            $request->file('avatar')->move('resources/upload/news/',$update);
        }

        $news->save();
        return redirect()->route('admin.news.index')->with(['flash_lever'=>'success','flash_message'=>'Sửa thành công']);
    }

    public function getDelete($id)
    {
        $cate = News::find($id);
        if (empty($cate)) {
            return redirect()->route('admin.error');
        }
        $cate->delete();
        return redirect()->route('admin.news.index');
    }
}

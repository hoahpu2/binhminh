<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/',function (){
//     return view('sub.bao-tri');
// });
Route::get('admin', function () {
	die('xx');
    return redirect('admin-login');
});
Route::get('/','HomeController@index')->name('homepage');
Route::get('lien-ket-nhanh/ve-chung-toi/index.html','HomeController@vechungtoi')->name('vechungtoi');
Route::get('san-pham/index.html','HomeController@sanpham')->name('sanpham');
Route::get('lien-ket-nhanh/giai-phap/index.html','HomeController@giaiphap')->name('giaiphap');
Route::get('du-an/index.html','HomeController@duan')->name('duan');
Route::get('dich-vu/index.html','HomeController@dichvu')->name('dichvu');
Route::get('tintuc/index.html','HomeController@tintuc')->name('tintuc');
Route::get('lien-he/index.html','HomeController@lienhe')->name('lienhe');
Route::get('product/{Slug}/detail.html','HomeController@productDetail')->name('productdetail');
Route::get('du-an/{Slug}','HomeController@duanDetail')->name('duan-detail');
Route::post('lien-he/wp-admin/admin-ajax.php','HomeController@adminAjax')->name('wp-admin');

Route::post('tim-kiem','DetailProductController@search')->name('search');
Route::get('lien-he','ContactController@index')->name('customer-contact');
Route::post('lien-he','ContactController@postContact');
Route::get('tin-tuc','NewsController@index')->name('news');
Route::get('tin-tuc/{Slug}','NewsController@getDetail');

Route::post('admin-check',['as'=>'admin.dangnhap','uses'=>'admin\ProfileController@postdangnhapAdmin']);
Route::get('admin-logout',['as'=>'admin.dangxuat','uses'=>'admin\ProfileController@getdangxuatAdmin']);
Route::get('/admin-login', function () {
	// dd(bcrypt('123456'));
    return view('admin.login');
})->name('admin-login');

Route::get('admin-error',['as'=>'admin.error','uses'=>'admin\ProfileController@getPageError']);


Route::group(['prefix'=>'admin', 'middleware'=>'adminLogin'],function(){
	/* Category */
	Route::group(['prefix'=>'cate'],function(){
		Route::get('index',['as'=>'admin.cate.index','uses'=>'admin\CategoryController@index']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'admin\CategoryController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'admin\CategoryController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'admin\CategoryController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'admin\CategoryController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'admin\CategoryController@postEdit']);
	});

	/* Prodution */
	Route::group(['prefix'=>'product'],function(){
		Route::get('index',['as'=>'admin.product.index','uses'=>'admin\ProductController@index']);
		Route::get('add',['as'=>'admin.product.getAdd','uses'=>'admin\ProductController@getAdd']);
		Route::post('add',['as'=>'admin.product.postAdd','uses'=>'admin\ProductController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'admin\ProductController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'admin\ProductController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'admin\ProductController@postEdit']);
	});

	/* Slider */
	Route::group(['prefix'=>'slider'],function(){
		Route::get('index',['as'=>'admin.slider.index','uses'=>'admin\SliderController@index']);
		Route::get('add',['as'=>'admin.slider.getAdd','uses'=>'admin\SliderController@getAdd']);
		Route::post('add',['as'=>'admin.slider.postAdd','uses'=>'admin\SliderController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.slider.getDelete','uses'=>'admin\SliderController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.slider.getEdit','uses'=>'admin\SliderController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.slider.postEdit','uses'=>'admin\SliderController@postEdit']);
	});

	/* News */
	Route::group(['prefix'=>'news'],function(){
		Route::get('index',['as'=>'admin.news.index','uses'=>'admin\NewsController@index']);
		Route::get('add',['as'=>'admin.news.getAdd','uses'=>'admin\NewsController@getAdd']);
		Route::post('add',['as'=>'admin.news.postAdd','uses'=>'admin\NewsController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.news.getDelete','uses'=>'admin\NewsController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.news.getEdit','uses'=>'admin\NewsController@getEdit']);
		Route::post('edit',['as'=>'admin.news.postEdit','uses'=>'admin\NewsController@postEdit']);
	});

	/* User */
	Route::group(['prefix'=>'user'],function(){
		Route::get('index/{id}',['as'=>'admin.user.index','uses'=>'admin\ProfileController@index']);
		Route::get('add',['as'=>'admin.user.getAdd','uses'=>'ProfileController@getAdd']);
		Route::post('add',['as'=>'admin.user.postAdd','uses'=>'admin\ProfileController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'ProfileController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'ProfileController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'ProfileController@postEdit']);
	});

	/* Contact */
	Route::group(['prefix'=>'contact'],function(){
		Route::get('index/{id}',['as'=>'admin.contact.index','uses'=>'admin\ContactController@index']);
		Route::get('add',['as'=>'admin.contact.getAdd','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'admin.contact.postAdd','uses'=>'admin\ContactController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.contact.getDelete','uses'=>'UserController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.contact.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.contact.postEdit','uses'=>'UserController@postEdit']);
	});

	/* Contact */
	Route::group(['prefix'=>'contactCu'],function(){
		Route::get('index',['as'=>'admin.contactCu.index','uses'=>'admin\ContactController@indexCus']);
		Route::get('detail/{id}',['as'=>'admin.contactCu.getDetail','uses'=>'admin\ContactController@getDetail']);
	});

	/* Request Customer */
	Route::group(['prefix'=>'request'],function(){
		Route::get('index',['as'=>'admin.request.index','uses'=>'admin\CustomerController@index']);
		Route::get('detail/{id}',['as'=>'admin.request.detail','uses'=>'admin\CustomerController@detail']);
		Route::get('preview',['as'=>'admin.request.preview','uses'=>'admin\CustomerController@preview']);
		Route::get('clickshow/{id}',['as'=>'admin.request.clickshow','uses'=>'admin\CustomerController@clickshow']);
		Route::get('ajaxx',['as'=>'admin.request.ajaxx','uses'=>'admin\CustomerController@ajaxx']);
		Route::post('edit/{id}',['as'=>'admin.request.postEdit','uses'=>'admin\CustomerController@postEdit']);
	});

	/* CateContent */
	Route::group(['prefix'=>'catecontent'],function(){
		Route::get('index',['as'=>'admin.catecontent.index','uses'=>'admin\CatecontentController@index']);
		Route::get('add',['as'=>'admin.catecontent.getAdd','uses'=>'admin\CatecontentController@getAdd']);
		Route::post('add',['as'=>'admin.catecontent.postAdd','uses'=>'admin\CatecontentController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.catecontent.getDelete','uses'=>'admin\CatecontentController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.catecontent.getEdit','uses'=>'admin\CatecontentController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.catecontent.postEdit','uses'=>'admin\CatecontentController@postEdit']);
	});

});
Route::get('{slug}','HomeController@notFound')->name('404');

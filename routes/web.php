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
Route::get('/','HomeController@index')->name('homepage');
Route::get('danh-muc/{slug}','DetailProductController@getList')->name('getList');
Route::get('san-pham/{slug}','DetailProductController@index')->name('detail');
Route::get('danh-sach-san-pham/moi','DetailProductController@getListNew')->name('list-product-new');
Route::get('danh-sach-san-pham/sale','DetailProductController@getListSale')->name('list-product-sale');
Route::get('danh-sach-san-pham/lien-quan','DetailProductController@getListProductRecommend')->name('list-product-recommend');
Route::get('tim-kiem/{slug}','DetailProductController@search');
Route::get('lien-he','ContactController@index');
Route::get('tin-tuc','NewsController@index');

// Route::get('/', function () {
// 	dd(bcrypt('123456'));
//     // return view('admin.login');
// });
Route::post('admin-check',['as'=>'admin.dangnhap','uses'=>'admin\ProfileController@postdangnhapAdmin']);
Route::get('admin-logout',['as'=>'admin.dangxuat','uses'=>'admin\ProfileController@getdangxuatAdmin']);
Route::get('/admin-login', function () {
	// dd(bcrypt('123456'));
    return view('admin.login');
})->name('admin-login');

Route::get('admin-error',['as'=>'admin.error','uses'=>'admin\ProfileController@getPageError']);
//,'middleware'=>'adminLogin'

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
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
		Route::get('index',['as'=>'admin.news.index','uses'=>'NewsController@index']);
		Route::get('add',['as'=>'admin.news.getAdd','uses'=>'NewsController@getAdd']);
		Route::post('add',['as'=>'admin.news.postAdd','uses'=>'NewsController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.news.getDelete','uses'=>'NewsController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.news.getEdit','uses'=>'NewsController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.news.postEdit','uses'=>'NewsController@postEdit']);
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

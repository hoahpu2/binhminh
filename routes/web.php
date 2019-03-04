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

Route::get('/', function () {
    return view('admin.category.add');
});
//,'middleware'=>'adminLogin'

Route::group(['prefix'=>'admin'],function(){
	/* Category */
	Route::group(['prefix'=>'cate'],function(){
		Route::get('index',['as'=>'admin.cate.index','uses'=>'admin\CategoryController@index']);
		Route::get('add/{id}',['as'=>'admin.cate.getAdd','uses'=>'admin\CategoryController@getAdd']);
		Route::post('add/{id}',['as'=>'admin.cate.postAdd','uses'=>'admin\CategoryController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'admin\CategoryController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'admin\CategoryController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'admin\CategoryController@postEdit']);
	});

	/* Prodution */
	Route::group(['prefix'=>'product'],function(){
		Route::get('index',['as'=>'admin.product.index','uses'=>'ProductController@index']);
		Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
		Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);
	});
	Route::group(['prefix'=>'slider'],function(){
		Route::get('index',['as'=>'admin.slider.index','uses'=>'SliderController@index']);
		Route::get('add',['as'=>'admin.slider.getAdd','uses'=>'SliderController@getAdd']);
		Route::post('add',['as'=>'admin.slider.postAdd','uses'=>'SliderController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.slider.getDelete','uses'=>'SliderController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.slider.getEdit','uses'=>'SliderController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.slider.postEdit','uses'=>'SliderController@postEdit']);
	});
	Route::group(['prefix'=>'news'],function(){
		Route::get('index',['as'=>'admin.news.index','uses'=>'NewsController@index']);
		Route::get('add',['as'=>'admin.news.getAdd','uses'=>'NewsController@getAdd']);
		Route::post('add',['as'=>'admin.news.postAdd','uses'=>'NewsController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.news.getDelete','uses'=>'NewsController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.news.getEdit','uses'=>'NewsController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.news.postEdit','uses'=>'NewsController@postEdit']);
	});
	Route::group(['prefix'=>'user'],function(){
		Route::get('index',['as'=>'admin.user.index','uses'=>'UserController@index']);
		Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
	});
});

@extends('layout.index')
@section('content')
    <div class="wrap">
        <div class="main">
            <div class="content">
                <div class="content_top">
                    <div class="heading">
                        <h3>Sản phẩm mới nhất</h3>
                    </div>
                    <div class="page-no">
                        <ul>
                            <li>[<a href="#"> Xem thêm>>></a >]</li>
                        </ul></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="section group">
                    @foreach($typeProduct as $new)
                        <div class="grid_1_of_4 images_1_of_4">
                            <a href=""><img src="{{asset('resources/upload/product/'.$new->PR_avatar)}}" alt="" /></a>
                            <h2>{{$new->PR_name}} </h2>
                            <p>{{$new->PR_sortDesc}}</p>
                            <p><span class="strike">{{$new->PR_sale}}</span><span class="price">{{$new->PR_price}}</span></p>
                            <div class="button"><span><img src="{{asset('images/cart.jpg')}}" alt="" /><a href="preview-3.html" class="cart-button">Liên hệ</a></span> </div>
                            <div class="button"><span><a href="preview-3.html" class="details">Chi tiết</a></span></div>
                        </div>
                    @endforeach()
                </div>
        </div>
    </div>
    </div>
    @endsection
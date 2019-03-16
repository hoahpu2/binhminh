@extends('layout.index')

@section('content')

@include('sub.client.header-detail')
<div class="wrap">
    <div class="main">
        <div class="content">
            <div class="content_top" style="background: #ede392;">
                <div class="heading">
                    <h3>Sản phẩm mới nhất</h3>
                </div>
                <div class="page-no">
                    <ul>
                        <li>[<a href="{{route('list-product-new')}}"> Xem thêm>>></a >]</li>
                    </ul></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                @foreach($newProduct as $new)
                <div class="grid_1_of_4 images_1_of_4">
                    <img src="{{asset('images/sale.png')}}"  width="300px" height="240px" class="product-sale"/>
                    <a href=""><img src="{{asset('resources/upload/product/'.$new->PR_avatar)}}"  width="300px" height="240px" alt="" /></a>
                    <h2><a href="{{url('san-pham').'/'.$new->PR_alias}}" class="pr-price">{{substr($new->PR_name,0,40)}} </a></h2>
                    <p class="short_description">{{substr($new->PR_sortDesc,0,80)}}...</p>
                    <p><span class="strike">{{number_format($new->PR_sale)}}Đ</span><span class="price">{{number_format($new->PR_price)}}Đ</span></p>
                    <div class="button"><span><img src="{{asset('images/cart.jpg')}}" alt="" /><a href="{{url('san-pham').'/'.$new->PR_alias}}" class="cart-button">Liên hệ</a></span> </div>
                    <div class="button"><span><a href="{{url('san-pham').'/'.$new->PR_alias}}" class="details">Chi tiết</a></span></div>
                </div>
                    @endforeach()
            </div>
        </div>
    </div>
</div>
</div>
@endsection

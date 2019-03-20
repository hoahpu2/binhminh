@extends('layout.index')

@section('content')

@include('sub.client.header-detail')
<div class="wrap">
    <div class="main">
        @foreach($categoryContent as $item)
            @if($item->count >0)
        <div class="content">
            <div class="content_top" style="background: #ede392;">
                <div class="heading">
                    <h3>{{$item->CC_name}}</h3>
                </div>
                <div class="page-no">
                    <ul>
                        <li>[<a href="{{url('danh-sach-san-pham'.'/'.$item->CC_alias)}}"> Xem thêm>>></a >]</li>
                    </ul></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                @foreach($item->product as $new)
                <div class="grid_1_of_4 images_1_of_4">
                    @if($new->PR_sale != 0)
                    <img src="{{asset('images/sale.png')}}"  width="300px" height="240px" class="product-sale"/>
                    @endif
                    <a href="{{url('san-pham/'.$new->PR_alias)}}"><img src="{{asset('resources/upload/product/'.$new->PR_avatar)}}"  width="300px" height="240px" alt="" /></a>
                    <h2><a href="{{url('san-pham').'/'.$new->PR_alias}}" class="pr-price">{{substr($new->PR_name,0,40)}} </a></h2>
                    <p class="short_description">{{substr($new->PR_sortDesc,0,80)}}...</p>
                        @if($new->PR_sale != 0)
                            <p><span class="strike">{{number_format($new->PR_price)}}Đ</span><span class="price">{{number_format($new->PR_sale)}}Đ</span></p>
                        @else
                            <p><span class="strike"></span><span class="price">{{number_format($new->PR_price)}}Đ</span></p>
                        @endif
                    <div class="button"><span><img src="{{asset('images/cart.jpg')}}" alt="" /><a href="{{url('san-pham').'/'.$new->PR_alias}}" class="cart-button">Liên hệ</a></span> </div>
                    <div class="button"><span><a href="{{url('san-pham').'/'.$new->PR_alias}}" class="details">Chi tiết</a></span></div>
                </div>

                    @endforeach()
            </div>
        </div>
            @endif
            @endforeach
    </div>
</div>
</div>
@endsection

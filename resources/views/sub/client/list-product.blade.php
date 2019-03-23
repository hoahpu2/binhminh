@extends('layout.index')

@section('content')
    @if(isset($product))
        @if($product->count() > 0)
        <div class="main">
            <div class="content">
                <div class="content_top">
                    <div class="heading">
                        @if(isset($categoryContent))
                        <h3>Sản phẩm của {{($categoryContent->CC_name)? ($categoryContent->CC_name) : ($categoryContent->CA_name) }}</h3>
                        @else
                        <h3>Kết quả tìm kiếm {{$name}}</h3>
                            @endif
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="section group">
                   @php $i=0; @endphp
                    @foreach($product as $new)
                        @php $style = ($i%4 == 0)?'style=margin-left:0;': '';  @endphp
                        <div class="grid_1_of_4 images_1_of_4">
                            @if($new->PR_sale != 0)
                                <img src="{{asset('images/sale.png')}}" style="width: 50px;height: 50px;" class="product-sale"/>
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
                       @php $i++; @endphp
                    @endforeach()
                </div><div class="container-links">
                    {{$product->links()}}
                </div>
            </div>
        </div>

            @else
                <div>
                    <p style="height: 500px">Hiện không có sản phẩm nào !!!"><a href="{{route('homepage')}}">Về trang chủ ==></a></p>
                </div>
                @endif
    @else
        <div>
            <p style="height: 500px">Hiện không có sản phẩm nào !!!"><a href="{{route('homepage')}}">Về trang chủ ==></a></p>
        </div>
    @endif
@endsection
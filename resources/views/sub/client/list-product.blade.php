@extends('layout.index')

@section('content')
    @if(isset($product))
        @if($product->count() > 0)
        <div class="main">
            <div class="content">
                @if(isset($categorys))
                <div class="content_top">
                    <div class="heading">
                        <h3>Sản phẩm của {{$categorys->CA_name}}</h3>
                    </div>
                    <div class="clear"></div>
                </div>
                @endif
                <div class="section group">
                   @php $i=0; @endphp
                    @foreach($product as $new)
                        @php $style = ($i%4 == 0)?'style=margin-left:0;': '';  @endphp
                        <div class="grid_1_of_4 images_1_of_4" {{$style }} >
                            <a href=""><img src="{{asset('resources/upload/product/'.$new->PR_avatar)}}" width="300px" height="240px" alt="" /></a>
                            <h2><a href="">{{$new->PR_name}}</a></h2>
                            <p>{{$new->PR_sortDesc}}</p>
                            <p><span class="strike">{{$new->PR_sale}}</span><span class="price">{{$new->PR_price}}</span></p>
                            <div class="button"><span><img src="{{asset('images/cart.jpg')}}" alt="" /><a href="{{url('san-pham').'/'.$new->PR_alias}}" class="cart-button">Liên hệ</a></span> </div>
                            <div class="button"><span><a href="{{url('san-pham').'/'.$new->PR_alias}}" class="details">Chi tiết</a></span></div>
                        </div>
                       @php $i++; @endphp
                    @endforeach()
                </div>
            </div>
        </div>
            @else
                <div>
                    <p style="height: 500px">Danh mục không có sản phẩm nào !!!"><a href="{{route('homepage')}}">Về trang chủ ==></a></p>
                </div>
                @endif
    @else
        <div>
            <p style="height: 500px">404</p>
        </div>
    @endif
<div class="container-links">
    {{$product->links()}}
</div>
@endsection
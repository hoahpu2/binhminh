@extends('sub.client.product-detail')
@section('content')
    @if(isset($product))
    <div>
        <div class="main">
        <div class="content">
            <p style="font-style: italic;margin-bottom:8px;"><a href="/">Trang chủ</a> / <a href="">Chi tiết sản phẩm</a></p>
            <div class="container product-detail-image-desktop">
                <div class="exzoom hidden" id="exzoom">
                    <div class="exzoom_img_box">
                        <ul class='exzoom_img_ul'>
                            @foreach($images as $img)
                            <li><img src="{{asset('resources/upload/product/images_detail/'.$img->IM_url)}}" /></li>
                                @endforeach
                        </ul>
                    </div>
                    <div class="exzoom_nav"></div>
                    <p class="exzoom_btn">
                        <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                        <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                    </p>
                </div>
            </div>
            <div class="product-detail">

                <div class="product-name">{{$product->PR_name}}</div>
                <p class="detail-info">Mã sản phẩm: {{$product->PR_SKU}}</p>
                <p class="detail-info">Tình trạng:</p>
                <p class="detail-info">Hãng sản xuất:</p>
                <b class="price">{{number_format($product->PR_price)}} Đ</b>
                <p><i style="font-style: italic; color:green;">Chúng tôi nhận giao hàng trong vòng 1 giờ</i></p>
                <div class="product-desc" style="font-style: italic;">{{$product->PR_sortDesc}}</div>
                <button type="button" class="single_add_to_cart_button single_add_vang" data-toggle="modal" data-target="#myModal">
                    Đặt Ngay Giao Tận Nơi<span>Nút mua nhanh - gọn - lẹ</span></button>
            </div>
            <div class="clear"></div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <span class="label label-success">Cam kết của chúng tôi</span>
                <div class="hrviet"></div>
                <div class="camket">
                    <p><i class="far fa-thumbs-up"></i>Đảm bảo 100% hàng chính hãng</p>
                    <p><i class="fas fa-sync-alt"></i></span> Đổi trả hàng trong 10 ngày (*)</p>
                    <p><i class="fas fa-heart"></i></span> Dịch vụ khách hàng tốt nhất</p>  </div>
                <div class="hrviet"></div>
                <div class="hotlie">
                    <p class="sft"><i class="fas fa-phone"></i><b> 0968.268.365 </b>( KD Nội Thất )
                        <br>
                        <b>***</b><b> 0921.268.365 </b>( KD Phụ Tùng )</p>
                    <p class="sft"><i class="fas fa-phone"></i> <b> 0905.268.365</b> ( Bán Sỉ )</p>
                    <p><i class="fas fa-phone"></i> <b> 0385.910.910</b>( Khiếu Nại )</p>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
        <div class="info-product">
            <h2>Thông tin sản phẩm</h2>
            {!!$product->PR_content!!}
        </div>
    <div class="recommend">
        <div class="content_top">
            <div class="heading">
                <h3>Sản phẩm liên quan</h3>
            </div>
            <div class="page-no">
               <ul>
                    <li>[<a href="{{route('list-product-recommend')}}"> Next>>></a >]</li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            @foreach($recommended as $new)
                <div class="grid_1_of_4 images_1_of_4">
                    <a href=""><img src="{{asset('resources/upload/product/'.$new->PR_avatar)}}" alt="" width="300px" height="240px" /></a>
                    <h2><a href="{{url('san-pham').'/'.$new->PR_alias}}">{{$new->PR_name}} </a></h2>
                    <p>{{$new->PR_sortDesc}}</p>
                    <p><span class="strike">{{$new->PR_sale}}</span><span class="price">{{$new->PR_price}}</span></p>
                    <div class="button"><span><img src="{{asset('images/cart.jpg')}}" alt="" /><a href="preview-3.html" class="cart-button">Liên hệ</a></span> </div>
                    <div class="button"><span><a href="preview-3.html" class="details">Chi tiết</a></span></div>
                </div>
            @endforeach()
        </div>
    </div>
</div>
@else
    <div>
        <p style="height:500px" >Sản phẩm không tồn tại!</p>
    </div>
@endif
<script type="text/javascript">

    $('.container').imagesLoaded( function() {
        $("#exzoom").exzoom({
            autoPlay: false,
        });
        $("#exzoom").removeClass('hidden')
    });

</script>
<link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' />
@endsection
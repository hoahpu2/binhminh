@extends('sub.client.product-detail')
@section('content')
<div >
    <div class="main">
        <div class="content">
            <p>Trang chủ/chi tiết sản phẩm</p>
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
                <div class="tsh"><i class="fas fa-stopwatch"></i><a href="#">Nhận giao hàng trong vòng 1 giờ</a></div>
                <b class="price">{{$product->PR_price}}</b>
                <div class="product-sku">{{$product->PR_SKU}}</div>
                <div class="product-desc">{{$product->PR_sortDesc}}</div>
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
    <div class="tab-content">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Mota')" id="defaultOpen">Mô tả</button>
            <button class="tablinks" onclick="openCity(event, 'Danhgia')">Đánh giá</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
        </div>

        <div id="Mota" class="tabcontent">
            <h3>Mô tả</h3>
            <p>{!!$product->PR_content !!}</p>
        </div>

        <div id="Danhgia" class="tabcontent">
            <h3>Danhgia</h3>
            <p>day la danh gia</p>
        </div>

    </div>
    <div class="recommend">
        <div class="content_top">
            <div class="heading">
                <h3>Sản phẩm liên quan</h3>
            </div>
            <div class="page-no">
               <ul>
                    <li>[<a href="#"> Next>>></a >]</li>
                </ul></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            @foreach($recommended as $new)
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
<script type="text/javascript">

    $('.container').imagesLoaded( function() {
        $("#exzoom").exzoom({
            autoPlay: false,
        });
        $("#exzoom").removeClass('hidden')
    });

</script>
<link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' />
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    $('.gallery-responsive').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
    });

</script>
@endsection
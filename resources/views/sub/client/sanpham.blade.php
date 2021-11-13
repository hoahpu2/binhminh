@extends('layout.index')

@section('content')
<div class="shop-page-title category-page-title page-title ">
    <div class="page-title-inner flex-row  medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
            <div class="is-large">
                <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="/">Trang chủ</a> <span class="divider">/</span> Sản Phẩm</nav>
            </div>
            <div class="category-filtering category-filter-row show-for-medium">
                <a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
                    <i class="icon-equalizer"></i>
                    <strong>Lọc</strong>
                </a>
                <div class="inline-block">
                </div>
            </div>
        </div>
        <div class="flex-col medium-text-center">
            <p class="woocommerce-result-count hide-for-medium">
                Hiển thị 1–12 của 1341 kết quả</p>
            <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
                    <option value="menu_order" selected="selected">Thứ tự mặc định</option>
                    <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                    <option value="rating">Thứ tự theo điểm đánh giá</option>
                    <option value="date">Mới nhất</option>
                    <option value="price">Thứ tự theo giá: thấp đến cao</option>
                    <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                </select>
                <input type="hidden" name="paged" value="1">
            </form>
        </div>
    </div>
</div>
<main id="main" class="">
    <div class="row category-page-row">

        <div class="col large-3 hide-for-medium ">
            <div id="shop-sidebar" class="sidebar-inner col-inner">
                <aside id="search-5" class="widget widget_search">
                    <form method="get" class="searchform" action="http://ipe.vn/" role="search">
                        <div class="flex-row relative">
                            <div class="flex-col flex-grow">
                                <input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Tìm kiếm…" autocomplete="off">
                            </div>
                            <div class="flex-col">
                                <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                    <i class="fas fa-search"></i> </button>
                            </div>
                        </div>
                        <div class="live-search-results text-left z-top">
                            <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                        </div>
                    </form>
                </aside>
                <aside id="woocommerce_product_categories-6" class="widget woocommerce widget_product_categories"><span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
                    <div class="is-divider small"></div>
                    <ul class="product-categories">
                        @foreach($a_GetCategory as $cates)
                        <li class="cat-item cat-item-855 cat-parent has-child <?php echo $cates['CA_id'] == $cateActive ? 'current-cat active' : '' ?>" aria-expanded="false"><a class="find_ter" key_word="{{$cates['CA_alias']}}" href="<?php echo route('sanpham'); ?>?cate={{$cates['CA_id']}}">{{$cates['CA_name']}}</a>@if(!empty($cates['subMenu']))<button class="toggle"><i class="fas fa-angle-down"></i></button>@endif
                            <ul class="children">
                                @if(!empty($cates['subMenu']))
                                @foreach($cates['subMenu'] as $cate)
                                <li class="cat-item cat-item-866 cat-parent has-child <?php echo $cate['CA_id'] == $cateActive ? 'current-cat active' : '' ?>" aria-expanded="false"><a class="find_ter" key_word="{{$cate['CA_alias']}}" href="<?php echo route('sanpham'); ?>?cate={{$cate['CA_id']}}">{{$cate['CA_name']}}</a>@if(!empty($cate['subMenu']))<button class="toggle"><i class="fas fa-angle-down"></i></button>@endif
                                    <ul class="children">
                                        @if(!empty($cate['subMenu']))
                                        @foreach($cate['subMenu'] as $catee)
                                        <li class="cat-item cat-item-867"><a class="find_ter <?php echo $catee['CA_id'] == $cateActive ? 'current-cat active' : '' ?>" key_word="{{$catee['CA_alias']}}" href="<?php echo route('sanpham'); ?>?cate={{$catee['CA_id']}}">{{$catee['CA_name']}}</a></li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </li>
                        @endforeach
                        <li class="cat-item cat-item-855 cat-parent has-child active" aria-expanded="true"><a href="../index.html">AirTAC</a>
                            <ul class="children">
                                <li class="cat-item cat-item-866 current-cat cat-parent active has-child" aria-expanded="false"><a href="index.html">Bộ Lọc AirTAC</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-867"><a href="dong-ga/index.html">Dòng GA</a></li>
                                        <li class="cat-item cat-item-868"><a href="dong-gp/index.html">Dòng GP</a></li>
                                        <li class="cat-item cat-item-869"><a href="dong-khac/index.html">Dòng Khác</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-888 cat-parent has-child" aria-expanded="false"><a href="../phu-kien-airtac/index.html">Phụ Kiện AirTAC</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-898"><a href="../phu-kien-airtac/bo-dieu-khien-toc-do-airtac/index.html">Bộ Điều Khiển Tốc Độ AirTAC</a></li>
                                        <li class="cat-item cat-item-896"><a href="../phu-kien-airtac/bo-giam-am-airtac/index.html">Bộ Giảm Âm AirTAC</a></li>
                                        <li class="cat-item cat-item-894"><a href="../phu-kien-airtac/dau-noi-khi-airtac/index.html">Đầu Nối Khí AirTAC</a></li>
                                        <li class="cat-item cat-item-893"><a href="../phu-kien-airtac/ong-pa-airtac/index.html">Ống PA AirTAC</a></li>
                                        <li class="cat-item cat-item-890"><a href="../phu-kien-airtac/ong-pu-airtac/index.html">Ống PU AirTAC</a></li>
                                        <li class="cat-item cat-item-889"><a href="../phu-kien-airtac/phu-kien-giam-xoc-airtac/index.html">Phụ Kiện Giảm Xóc AirTAC</a></li>
                                        <li class="cat-item cat-item-900"><a href="../phu-kien-airtac/van-ngon-tay-airtac/index.html">Van Ngón Tay AirTAC</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-901"><a href="../thanh-truot-airtac/index.html">Thanh Trượt AirTAC</a></li>
                                <li class="cat-item cat-item-879 cat-parent has-child" aria-expanded="false"><a href="../thiet-bi-truyen-dong-airtac/index.html">Thiết Bị Truyền Động AirTAC</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-885"><a href="../thiet-bi-truyen-dong-airtac/cam-bien-airtac/index.html">Cảm Biến AirTAC</a></li>
                                        <li class="cat-item cat-item-881"><a href="../thiet-bi-truyen-dong-airtac/xylanh-ba-airtac/index.html">XyLanh Ba AirTAC</a></li>
                                        <li class="cat-item cat-item-880"><a href="../thiet-bi-truyen-dong-airtac/xylanh-doi-airtac/index.html">XyLanh Đôi AirTAC</a></li>
                                        <li class="cat-item cat-item-887"><a href="../thiet-bi-truyen-dong-airtac/xylanh-kep-airtac/index.html">XyLanh Kẹp AirTAC</a></li>
                                        <li class="cat-item cat-item-884"><a href="../thiet-bi-truyen-dong-airtac/xylanh-quay-airtac/index.html">XyLanh Quay AirTAC</a></li>
                                        <li class="cat-item cat-item-882"><a href="../thiet-bi-truyen-dong-airtac/xylanh-truot-airtac/index.html">XyLanh Trượt AirTAC</a></li>
                                        <li class="cat-item cat-item-883"><a href="../thiet-bi-truyen-dong-airtac/xylanh-tu-airtac/index.html">XyLanh Từ AirTAC</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-856 cat-parent has-child" aria-expanded="false"><a href="../van-airtac/index.html">Van AirTAC</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-857"><a href="../van-airtac/van-dien-tu-airtac/index.html">Van Điện Từ AirTAC</a></li>
                                        <li class="cat-item cat-item-860"><a href="../van-airtac/van-dieu-khien-airtac/index.html">Van Điều Khiển AirTAC</a></li>
                                        <li class="cat-item cat-item-862"><a href="../van-airtac/van-dieu-khien-khi-nen-airtac/index.html">Van Điều Khiển Khí Nén AirTAC</a></li>
                                        <li class="cat-item cat-item-864"><a href="../van-airtac/van-tay-airtac/index.html">Van Tay AirTAC</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-872 cat-parent has-child" aria-expanded="false"><a href="../xylanh-airtac/index.html">XyLanh AirTAC</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-875"><a href="../xylanh-airtac/dau-noi-airtac/index.html">Đầu Nối AirTAC</a></li>
                                        <li class="cat-item cat-item-873"><a href="../xylanh-airtac/giam-xoc-airtac/index.html">Giảm Xóc AirTAC</a></li>
                                        <li class="cat-item cat-item-874"><a href="../xylanh-airtac/xylanh-airtac-xylanh-airtac/index.html">XyLanh AirTAC</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>

        <div class="col large-9">
            <div class="shop-container">

                <div class="woocommerce-notices-wrapper"></div>
                <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2">
                    <?php if(!empty($all_Product)): ?>
                    @foreach($all_Product as $product)
                    <div class="product-small col has-hover product type-product post-3071 status-publish instock product_cat-van-bi product_cat-van-cong-nghiep product_cat-van-kitz product_tag-10k-ball-valve-full-bore has-post-thumbnail shipping-taxable product-type-simple">
                        <div class="col-inner">

                            <div class="badge-container absolute left top z-1">
                            </div>
                            <div class="product-small box ">
                                <div class="box-image">
                                    <div class="image-fade_in_back">
                                        <a href="/product/{{$product->PR_alias}}/detail.html" aria-label="10K BALL VALVE FULL BORE">
                                            <img style="max-width:100%;width:100%;margin: 0 auto;height: 200px;" width="200" height="200" src="{{url('resources/upload/product/').'/'.$product->PR_avatar}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"> </a>
                                    </div>
                                    <div class="image-tools is-small top right show-on-hover">
                                        <div class="wishlist-icon">
                                            <button class="wishlist-button button is-outline circle icon" aria-label="Wishlist">
                                                <i class="icon-heart"></i> </button>
                                            <div class="wishlist-popup dark">

                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-3071  wishlist-fragment on-first-load" data-fragment-ref="3071" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:3071,&quot;parent_product_id&quot;:3071,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                    <!-- ADD TO WISHLIST -->

                                                    <div class="yith-wcwl-add-button">
                                                        <a href="indexd37c.html?add_to_wishlist=3071&amp;_wpnonce=1458e3aa04" class="add_to_wishlist single_add_to_wishlist" data-product-id="3071" data-product-type="simple" data-original-product-id="3071" data-title="Add to Wishlist" rel="nofollow">
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                    </div>

                                                    <!-- COUNT TEXT -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                    </div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        <a class="quick-view quick-view-added" data-prod="3071" href="#quick-view">Quick View</a>
                                    </div>
                                </div>

                                <div class="box-text box-text-products">
                                    <div class="title-wrapper">
                                        <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                            Van Bi </p>
                                        <p class="name product-title woocommerce-loop-product__title"><a href="/product/{{$product->PR_alias}}/detail.html" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{$product->PR_name}}</a></p>
                                    </div>
                                    <div class="price-wrapper">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <?php else: ?>
                        <p>Không tìm thấy sản phẩm nào</p>
                    <?php endif; ?>

                    <!-- <div> -->
                </div><!-- row -->
                <div class="container">
                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers nav-pagination links text-center">
                            <li><a class="next page-number" href="page/2/index.html"><i class="fas fa-angle-left"></i></a></li>
                            <li><span aria-current="page" class="page-number current">1</span></li>
                            <li><a class="page-number" href="page/2/index.html">2</a></li>
                            <li><a class="page-number" href="page/3/index.html">3</a></li>
                            <li><a class="page-number" href="page/4/index.html">4</a></li>
                            <li><span class="page-number dots">…</span></li>
                            <li><a class="page-number" href="page/110/index.html">110</a></li>
                            <li><a class="page-number" href="page/111/index.html">111</a></li>
                            <li><a class="page-number" href="page/112/index.html">112</a></li>
                            <li><a class="next page-number" href="page/2/index.html"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>

            </div><!-- shop container -->
        </div>
    </div>

</main>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type='text/javascript'>
    $("body").click(function() {
        // alert('xxx');
        $(".icon-angle-down").removeClass();
    });

    $('.toggle').click(function() {
        $(".icon-angle-down").removeClass();
    });

    // $('.find_ter').click(function() {
    //     ($(this).attr('key_word'));
    //     window.location.href = window.location + '?xxx';
    // });
</script>
@endsection
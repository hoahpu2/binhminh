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
                        <li class="cat-item cat-item-855 <?php echo !empty($cates['subMenu']) ? 'cat-parent has-child' : ''; ?> <?php echo $cates['CA_id'] == $cateActive ? 'current-cat ' : '' ?> <?php echo in_array($cateActive, $cates['list_sub_menu']) ? 'active' : '' ?>" aria-expanded="false"><a class="find_ter" key_word="{{$cates['CA_alias']}}" href="<?php echo route('sanpham'); ?>?cate={{$cates['CA_id']}}">{{$cates['CA_name']}}</a>
                            <ul class="children">
                                @if(!empty($cates['subMenu']))
                                @foreach($cates['subMenu'] as $cate)
                                <li class="cat-item cat-item-866 <?php echo !empty($cate['subMenu']) ? 'cat-parent has-child' : ''; ?> <?php echo $cate['CA_id'] == $cateActive ? 'current-cat' : '' ?> <?php echo in_array($cateActive, $cate['list_sub_menu']) ? 'active' : '' ?>" aria-expanded="false"><a class="find_ter" key_word="{{$cate['CA_alias']}}" href="<?php echo route('sanpham'); ?>?cate={{$cate['CA_id']}}">{{$cate['CA_name']}}</a>
                                    <ul class="children">
                                        @if(!empty($cate['subMenu']))
                                        @foreach($cate['subMenu'] as $catee)
                                        <li class="cat-item cat-item-867 <?php echo $catee['CA_id'] == $cateActive ? 'current-cat active' : '' ?>"><a class="find_ter" key_word="{{$catee['CA_alias']}}" href="<?php echo route('sanpham'); ?>?cate={{$catee['CA_id']}}">{{$catee['CA_name']}}</a></li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </li>
                        @endforeach
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
    // $("body").hover(function() {
    //     $(".icon-angle-down").removeClass();
    // });

    // $('.toggle').click(function() {
    //     $(".icon-angle-down").removeClass();
    // });

    // $('.find_ter').click(function() {
    //     ($(this).attr('key_word'));
    //     window.location.href = window.location + '?xxx';
    // });
</script>
@endsection
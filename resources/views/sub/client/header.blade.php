<style>
    .hotline, .menu-item-design-default > a {
        font-family: 'eicons' !important;
        color: #0b0742 !important;
    }
</style>
<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        <!-- <div id="top-bar" class="header-top hide-for-sticky">
            <div class="flex-row container">
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                    </ul>
                </div>

                <div class="flex-col hide-for-medium flex-center">
                    <ul class="nav nav-center nav-small  nav-divided">
                    </ul>
                </div>

                <div class="flex-col hide-for-medium flex-right">
                    <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                        <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                            <a href="#" aria-label="Tìm kiếm" class="is-small"><i class="icon-search"></i></a>
                            <ul class="nav-dropdown nav-dropdown-default">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative is-normal">
                                            <form role="search" method="get" class="searchform" action="http://ipe.vn/">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
                                                        <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="s" />
                                                        <input type="hidden" name="post_type" value="product" />
                                                    </div>
                                                    <div class="flex-col">
                                                        <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                                            <i class="icon-search"></i> </button>
                                                    </div>
                                                </div>
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="header-contact-wrapper">
                            <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">



                                <li class="">
                                    <a href="tel:0983.382.822" class="tooltip" title="0983.382.822">
                                        <i class="icon-phone" style="font-size:16px;"></i> <span>0983.382.822</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="flex-col show-for-medium flex-grow">
                    <ul class="nav nav-center nav-small mobile-nav  nav-divided">
                        <li class="html custom html_topbar_left"><strong class="uppercase">Add anything here or just remove it...</strong></li>
                    </ul>
                </div>

            </div>
        </div> -->
        <div id="masthead" class="header-main ">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href="/" title="IPE - Uy tín tạo niềm tin" rel="home">
                        <img width="150" height="98" src="{{asset('wp-content/')}}/uploads/logo-1.png" class="header_logo header-logo" alt="IPE" /><img width="100" height="98" src="{{asset('wp-content/')}}/uploads/2018/12/ipe-logo.png" class="header-logo-dark" alt="IPE" /></a>
                </div>

                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">

                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left  nav-size-large nav-spacing-xlarge nav-uppercase">
                    </ul>
                </div>

                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-size-large nav-spacing-xlarge nav-uppercase">
                        <li id="menu-item-1948" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1948 menu-item-design-default"><a href="<?php echo route('vechungtoi'); ?>" class="nav-top-link">Về Chúng Tôi</a></li>
                        <li id="menu-item-1916" class="ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-has-children ubermenu-item-741 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega menu-item menu-item-type-post_type menu-item-object-page menu-item-1916 menu-item-design-default">
                            <a href="<?php echo route('sanpham'); ?>" class="nav-top-link ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only">Sản Phẩm</a>
                        </li>
                        <li id="menu-item-7150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7150 menu-item-design-default"><a href="<?php echo route('giaiphap'); ?>" class="nav-top-link">Giải Pháp</a></li>
                        <!-- <li id="menu-item-7149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7149 menu-item-design-default"><a href="<?php echo route('duan'); ?>" class="nav-top-link">Dự Án</a></li>
                        <li id="menu-item-7151" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7151 menu-item-design-default"><a href="<?php echo route('dichvu'); ?>" class="nav-top-link">Dịch Vụ</a></li> -->
                        <li id="menu-item-7148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7148 menu-item-design-default"><a href="<?php echo route('tintuc'); ?>" class="nav-top-link">Tin tức</a></li>
                        <li id="menu-item-1968" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1968 menu-item-design-default"><a href="<?php echo route('lienhe'); ?>" class="nav-top-link">Liên Hệ</a></li>
                        <li class="has-dropdown header-language-dropdown menu-item-design-default">
                            <a href="#">
                                Languages <i class="icon-angle-down"></i> </a>
                            <ul class="nav-dropdown nav-dropdown-default">
                                <li><a>You need Polylang or WPML plugin for this to work. You can remove it from Theme Options.</a></li>
                            </ul>
                        </li>
                    </ul>    
                    <aside id="search-3" class="widget widget_search" style="width: 650px;margin-top: 17px;">
                        <form method="get" class="searchform" action="" role="search" style="display: inline-block;width: 390px;">
                            <div class="flex-row relative">
                                <div class="flex-col flex-grow">
                                    <input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Tìm kiếm…" autocomplete="off">
                                </div>
                                <div class="flex-col">
                                    <button type="button" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                        <i class="fas fa-search"></i> </button>
                                </div>
                            </div>
                            <div class="live-search-results text-left z-top">
                                <div class="autocomplete-suggestions" id="autocomplete-suggestions" style="max-height: 300px; z-index: 9999;">
                                </div>
                            </div>
                        </form>
                        <span class="hotline" style="margin-left: 30px;"> <b> HOTLINE: 0981668830</b></span>
                    </aside>
                    
                </div>

                <!-- Mobile Right Elements -->
                <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                        <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                            <a href="#" aria-label="Tìm kiếm" class="is-small"><i class="icon-search"></i></a>
                            <ul class="nav-dropdown nav-dropdown-default">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative is-normal">
                                            <form role="search" method="get" class="searchform" action="http://ipe.vn/">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <label class="screen-reader-text" for="woocommerce-product-search-field-1">Tìm kiếm:</label>
                                                        <input type="search" id="woocommerce-product-search-field-1" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="s" />
                                                        <input type="hidden" name="post_type" value="product" />
                                                    </div>
                                                    <div class="flex-col">
                                                        <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                                            <i class="icon-search"></i> </button>
                                                    </div>
                                                </div>
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="cart-item has-icon">

                            <a href="cart/index.html" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">

                                <span class="cart-icon image-icon">
                                    <strong>0</strong>
                                </span>
                            </a>


                            <!-- Cart Sidebar Popup -->
                            <div id="cart-popup" class="mfp-hide widget_shopping_cart">
                                <div class="cart-popup-inner inner-padding">
                                    <div class="cart-popup-title text-center">
                                        <h4 class="uppercase">Giỏ hàng</h4>
                                        <div class="is-divider"></div>
                                    </div>
                                    <div class="widget_shopping_cart_content">
                                        <div class="woocommerce-mini-cart__empty-message">No products in the cart.</div>
                                    </div>
                                    <div class="cart-sidebar-content relative"></div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>

            </div>

            <div class="container">
                <div class="top-divider full-width"></div>
            </div>
        </div>
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
    </div>
</header>
<script>
    window.addEventListener("scroll",function(){
        if (document.documentElement.scrollTop == 0) {
            $('#search-3').show()
        }else{
            $('#search-3').hide()
        }
    });
</script>
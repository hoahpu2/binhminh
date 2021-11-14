<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="top-bar" class="header-top hide-for-sticky">
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
        </div>
        <div id="masthead" class="header-main ">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href="/" title="IPE - Uy tín tạo niềm tin" rel="home">
                        <img width="100" height="98" src="{{asset('wp-content/')}}/uploads/2018/12/ipe-logo.png" class="header_logo header-logo" alt="IPE" /><img width="100" height="98" src="{{asset('wp-content/')}}/uploads/2018/12/ipe-logo.png" class="header-logo-dark" alt="IPE" /></a>
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
                            <!-- <ul class="ubermenu-submenu ubermenu-submenu-id-741 ubermenu-submenu-type-mega ubermenu-submenu-drop ubermenu-submenu-align-center" style="left: 158.297px;">
                                <li class=" ubermenu-autocolumn menu-item-741-col-0 ubermenu-item-level-1 ubermenu-column ubermenu-column-1-2 ubermenu-has-submenu-stack ubermenu-item-type-column ubermenu-column-id-741-col-0">
                                    <ul class="ubermenu-submenu ubermenu-submenu-id-741-col-0 ubermenu-submenu-type-stack">
                                        <li id="menu-item-855" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-855 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-target-with-image ubermenu-item-layout-default ubermenu-item-layout-image_left ubermenu-item-notext" href="http://vntechco.com.vn/product_category/smc/"><img class="ubermenu-image ubermenu-image-size-shop_thumbnail" src="http://vntechco.com.vn/wp-content/uploads/2020/09/logo-1-1.png" width="100" height="50" alt="logo (1)"></a></li>
                                        <li id="menu-item-745" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-745 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-target-with-image ubermenu-item-layout-default ubermenu-item-layout-image_left ubermenu-item-notext" href="http://vntechco.com.vn/product_category/cognex/"><img class="ubermenu-image ubermenu-image-size-shop_thumbnail" src="http://vntechco.com.vn/wp-content/uploads/2020/09/logo-3-1.png" width="100" height="50" alt="logo (3)"></a></li>
                                        <li id="menu-item-747" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-747 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-target-with-image ubermenu-item-layout-default ubermenu-item-layout-image_left ubermenu-item-notext" href="http://vntechco.com.vn/product_category/ls/"><img class="ubermenu-image ubermenu-image-size-shop_thumbnail" src="http://vntechco.com.vn/wp-content/uploads/2020/09/logo-8-1.png" width="100" height="50" alt="logo (8)"></a></li>
                                        <li id="menu-item-746" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-746 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-target-with-image ubermenu-item-layout-default ubermenu-item-layout-image_left ubermenu-item-notext" href="http://vntechco.com.vn/product_category/delixi/"><img class="ubermenu-image ubermenu-image-size-shop_thumbnail" src="http://vntechco.com.vn/wp-content/uploads/2020/09/logo-5-1.png" width="100" height="50" alt="logo (5)"></a></li>
                                    </ul>
                                </li>
                                <li class=" ubermenu-autocolumn menu-item-741-col-1 ubermenu-item-level-1 ubermenu-column ubermenu-column-1-2 ubermenu-has-submenu-stack ubermenu-item-type-column ubermenu-column-id-741-col-1">
                                    <ul class="ubermenu-submenu ubermenu-submenu-id-741-col-1 ubermenu-submenu-type-stack">
                                        <li id="menu-item-749" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-749 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-target-with-image ubermenu-item-layout-default ubermenu-item-layout-image_left ubermenu-item-notext" href="http://vntechco.com.vn/product_category/wanshsin/"><img class="ubermenu-image ubermenu-image-size-shop_thumbnail" src="http://vntechco.com.vn/wp-content/uploads/2020/09/logo-6-1.png" width="100" height="50" alt="logo (6)"></a></li>
                                        <li id="menu-item-750" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-750 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-target-with-image ubermenu-item-layout-default ubermenu-item-layout-image_left ubermenu-item-notext" href="http://vntechco.com.vn/product_category/zebra/"><img class="ubermenu-image ubermenu-image-size-shop_thumbnail" src="http://vntechco.com.vn/wp-content/uploads/2020/09/logo-4-1.png" width="100" height="50" alt="logo (4)"></a></li>
                                        <li id="menu-item-2618" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-2618 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-target-with-image ubermenu-item-layout-default ubermenu-item-layout-image_left ubermenu-item-notext" href="http://vntechco.com.vn/product_category/opt/"><img class="ubermenu-image ubermenu-image-size-full" src="http://vntechco.com.vn/wp-content/uploads/2020/10/logo-11.png" width="100" height="50" alt="logo-(11)"></a></li>
                                        <li id="menu-item-2619" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-2619 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto"><a class="ubermenu-target ubermenu-target-with-image ubermenu-item-layout-default ubermenu-item-layout-image_left ubermenu-item-notext" href="http://vntechco.com.vn/product_category/tm-robot/"><img class="ubermenu-image ubermenu-image-size-full" src="http://vntechco.com.vn/wp-content/uploads/2020/10/logo-10.png" width="100" height="50" alt="logo-(10)"></a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </li>
                        <li id="menu-item-7150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7150 menu-item-design-default"><a href="<?php echo route('giaiphap'); ?>" class="nav-top-link">Giải Pháp</a></li>
                        <li id="menu-item-7149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7149 menu-item-design-default"><a href="<?php echo route('duan'); ?>" class="nav-top-link">Dự Án</a></li>
                        <li id="menu-item-7151" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7151 menu-item-design-default"><a href="<?php echo route('dichvu'); ?>" class="nav-top-link">Dịch Vụ</a></li>
                        <li id="menu-item-7148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7148 menu-item-design-default"><a href="<?php echo route('tintuc'); ?>" class="nav-top-link">Tin tức</a></li>
                        <li id="menu-item-1968" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1968 menu-item-design-default"><a href="<?php echo route('lienhe'); ?>" class="nav-top-link">Liên Hệ</a></li>
                        <li class="has-dropdown header-language-dropdown">
                            <a href="#">
                                Languages <i class="icon-angle-down"></i> </a>
                            <ul class="nav-dropdown nav-dropdown-default">
                                <li><a>You need Polylang or WPML plugin for this to work. You can remove it from Theme Options.</a></li>
                            </ul>
                        </li>
                    </ul>
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
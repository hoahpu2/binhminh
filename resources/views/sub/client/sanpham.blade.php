@extends('layout.index')

@section('content')
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
                                    <i class="icon-search"></i> </button>
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
                        <li class="cat-item cat-item-855 cat-parent has-child" aria-expanded="false"><a href="../product_category/airtac/index.html">{{$cates['CA_name']}}</a>@if(!empty($cates['subMenu']))<button class="toggle"><i class="fas fa-angle-down"></i></button>@endif
                            <ul class="children">
                                @if(!empty($cates['subMenu']))
                                @foreach($cates['subMenu'] as $cate)
                                <li class="cat-item cat-item-866 cat-parent has-child" aria-expanded="false"><a href="../product_category/airtac/bo-loc-airtac/index.html">{{$cate['CA_name']}}</a>@if(!empty($cate['subMenu']))<button class="toggle"><i class="fas fa-angle-down"></i></button>@endif
                                    <ul class="children">
                                        @if(!empty($cate['subMenu']))
                                        @foreach($cate['subMenu'] as $catee)
                                        <li class="cat-item cat-item-867"><a href="../product_category/airtac/bo-loc-airtac/dong-ga/index.html">{{$catee['CA_name']}}</a></li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </li>
                        @endforeach
                        <li class="cat-item cat-item-124"><a href="../product_category/autonics/index.html">Autonics</a></li>
                        <li class="cat-item cat-item-156 cat-parent has-child" aria-expanded="false"><a href="../product_category/cognex/index.html">Cognex</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-903"><a href="../product_category/cognex/camera-2d/index.html">Camera 2D</a></li>
                                <li class="cat-item cat-item-904"><a href="../product_category/cognex/camera-3d/index.html">Camera 3D</a></li>
                                <li class="cat-item cat-item-906"><a href="../product_category/cognex/may-quet-ma-vach/index.html">Máy Quét Mã Vạch</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-915"><a href="../product_category/dalmec/index.html">Dalmec</a></li>
                        <li class="cat-item cat-item-749 cat-parent has-child" aria-expanded="false"><a href="../product_category/delixi/index.html">Delixi</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-750"><a href="../product_category/delixi/bien-tan-delixi/index.html">Biến Tần Delixi</a></li>
                                <li class="cat-item cat-item-751"><a href="../product_category/delixi/bo-chuyen-doi/index.html">Bộ Chuyển Đổi</a></li>
                                <li class="cat-item cat-item-752 cat-parent has-child" aria-expanded="false"><a href="../product_category/delixi/cong-tac-o-cam-tren-tuong/index.html">Công Tắc / Ổ Cắm Trên Tường</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-756"><a href="../product_category/delixi/cong-tac-o-cam-tren-tuong/tieu-chuan-anh/index.html">Tiêu Chuẩn Anh</a></li>
                                        <li class="cat-item cat-item-757"><a href="../product_category/delixi/cong-tac-o-cam-tren-tuong/tieu-chuan-chau-au/index.html">Tiêu Chuẩn Châu Âu</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-753 cat-parent has-child" aria-expanded="false"><a href="../product_category/delixi/den-led/index.html">Đèn LED</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-775"><a href="../product_category/delixi/den-led/den-led-ngoai-troi/index.html">Đèn LED Ngoài Trời</a></li>
                                        <li class="cat-item cat-item-776"><a href="../product_category/delixi/den-led/den-led-trong-nha/index.html">Đèn LED Trong Nhà</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-754"><a href="../product_category/delixi/dong-ho-do/index.html">Đồng Hồ Đo</a></li>
                                <li class="cat-item cat-item-755"><a href="../product_category/delixi/khoi-dong-mem/index.html">Khởi Động Mềm</a></li>
                                <li class="cat-item cat-item-758 cat-parent has-child" aria-expanded="false"><a href="../product_category/delixi/may-han/index.html">Máy Hàn</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-759"><a href="../product_category/delixi/may-han/may-han-cong-nghiep/index.html">Máy Hàn Công Nghiệp</a></li>
                                        <li class="cat-item cat-item-760"><a href="../product_category/delixi/may-han/may-han-dan-dung/index.html">Máy Hàn Dân Dụng</a></li>
                                        <li class="cat-item cat-item-761"><a href="../product_category/delixi/may-han/thiet-bi-bao-ve-vi-xu-ly/index.html">Thiết Bị Bảo Vệ Vi Xử Lý</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-780"><a href="../product_category/delixi/may-phat-delixi/index.html">Máy Phát Delixi</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-795 cat-parent has-child" aria-expanded="false"><a href="../product_category/fontal/index.html">Fontal</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-830"><a href="../product_category/fontal/giam-xoc-fontal/index.html">Giảm Xóc Fontal</a></li>
                                <li class="cat-item cat-item-819 cat-parent has-child" aria-expanded="false"><a href="../product_category/fontal/motor-fontal/index.html">Motor Fontal</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-820"><a href="../product_category/fontal/motor-fontal/motor-fontal-loai-nho/index.html">Motor Fontal Loại Nhỏ</a></li>
                                        <li class="cat-item cat-item-821"><a href="../product_category/fontal/motor-fontal/motor-fontal-tieu-chuan/index.html">Motor Fontal Tiêu Chuẩn</a></li>
                                        <li class="cat-item cat-item-822"><a href="../product_category/fontal/motor-fontal/motor-thuy-luc-fontal/index.html">Motor Thủy Lực Fontal</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-832"><a href="../product_category/fontal/thiet-bi-bo-sung-fontal/index.html">Thiết Bị Bổ Sung Fontal</a></li>
                                <li class="cat-item cat-item-824 cat-parent has-child" aria-expanded="false"><a href="../product_category/fontal/thiet-bi-chuan-bi-khong-khi-fontal/index.html">Thiết Bị Chuẩn Bị Không Khí Fontal</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-825"><a href="../product_category/fontal/thiet-bi-chuan-bi-khong-khi-fontal/f-r-l-fontal/index.html">F.R.L Fontal</a></li>
                                        <li class="cat-item cat-item-826"><a href="../product_category/fontal/thiet-bi-chuan-bi-khong-khi-fontal/he-thong-qube-fontal/index.html">Hệ Thống QUBE Fontal</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-796 cat-parent has-child" aria-expanded="false"><a href="../product_category/fontal/van-fontal/index.html">Van Fontal</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-798"><a href="../product_category/fontal/van-fontal/van-dan-khi-fontal/index.html">Van Dẫn Khí Fontal</a></li>
                                        <li class="cat-item cat-item-797"><a href="../product_category/fontal/van-fontal/van-dien-tu-fontal/index.html">Van Điện Từ Fontal</a></li>
                                        <li class="cat-item cat-item-800"><a href="../product_category/fontal/van-fontal/van-dieu-khien-bang-tay-fontal/index.html">Van Điều Khiển Bằng Tay Fontal</a></li>
                                        <li class="cat-item cat-item-799"><a href="../product_category/fontal/van-fontal/van-tay-fontal/index.html">Van Tay Fontal</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-815"><a href="../product_category/fontal/xylanh-kep-fontal/index.html">XyLanh Kẹp Fontal</a></li>
                                <li class="cat-item cat-item-806 cat-parent has-child" aria-expanded="false"><a href="../product_category/fontal/xylanh-khi-fontal/index.html">XyLanh Khí Fontal</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-812"><a href="../product_category/fontal/xylanh-khi-fontal/xylanh-fontal-dan-huong/index.html">XyLanh Fontal Dẫn Hướng</a></li>
                                        <li class="cat-item cat-item-807"><a href="../product_category/fontal/xylanh-khi-fontal/xylanh-khi-fontal-loai-tron/index.html">XyLanh Khí Fontal (Loại Tròn)</a></li>
                                        <li class="cat-item cat-item-808"><a href="../product_category/fontal/xylanh-khi-fontal/xylanh-khi-fontal-loai-vuong/index.html">XyLanh Khí Fontal (Loại Vuông)</a></li>
                                        <li class="cat-item cat-item-810"><a href="../product_category/fontal/xylanh-khi-fontal/xylanh-khi-fontal-co-khoa/index.html">XyLanh Khí Fontal Có Khóa</a></li>
                                        <li class="cat-item cat-item-811"><a href="../product_category/fontal/xylanh-khi-fontal/xylanh-khi-fontal-co-phanh/index.html">XyLanh Khí Fontal Có Phanh</a></li>
                                        <li class="cat-item cat-item-809"><a href="../product_category/fontal/xylanh-khi-fontal/xylanh-khi-fontal-loai-nho/index.html">XyLanh Khí Fontal Loại Nhỏ</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-118 cat-parent has-child" aria-expanded="false"><a href="../product_category/fuji/index.html">Fuji</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-121"><a href="../product_category/fuji/ha-tang-cong-nghiep/index.html">Hạ Tầng Công Nghiệp</a></li>
                                <li class="cat-item cat-item-123"><a href="../product_category/fuji/ha-tang-nang-luong-xa-hoi/index.html">Hạ Tầng Năng Lượng / Xã Hội</a></li>
                                <li class="cat-item cat-item-120"><a href="../product_category/fuji/nguon-dien/index.html">Nguồn Điện</a></li>
                                <li class="cat-item cat-item-122"><a href="../product_category/fuji/thiet-bi-phan-phoi-dien/index.html">Thiết Bị Phân Phối Điện</a></li>
                                <li class="cat-item cat-item-119"><a href="../product_category/fuji/truyen-dong-tu-dong-hoa/index.html">Truyền Động &amp; Tự Động Hóa</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-974 cat-parent has-child" aria-expanded="false"><a href="../product_category/iai/index.html">IAI</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-975"><a href="../product_category/iai/electric-cylinder-iai/index.html">Electric Cylinder IAI</a></li>
                                <li class="cat-item cat-item-980"><a href="../product_category/iai/electric-grippers-iai/index.html">Electric Grippers IAI</a></li>
                                <li class="cat-item cat-item-977"><a href="../product_category/iai/linear-actuators-iai/index.html">Linear Actuators IAI</a></li>
                                <li class="cat-item cat-item-976"><a href="../product_category/iai/mini-actuators-iai/index.html">Mini Actuators IAI</a></li>
                                <li class="cat-item cat-item-979"><a href="../product_category/iai/rotary-actuators-iai/index.html">Rotary Actuators IAI</a></li>
                                <li class="cat-item cat-item-978"><a href="../product_category/iai/servo-presses-iai/index.html">Servo Presses IAI</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-113 cat-parent has-child" aria-expanded="false"><a href="../product_category/idec/index.html">IDEC</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-115"><a href="../product_category/idec/cong-nghe-r-d/index.html">Công Nghệ R &amp; D</a></li>
                                <li class="cat-item cat-item-117"><a href="../product_category/idec/cong-tac-idec/index.html">Công Tắc</a></li>
                                <li class="cat-item cat-item-116"><a href="../product_category/idec/thiet-bi-chieu-sang/index.html">Thiết Bị Chiếu Sáng</a></li>
                                <li class="cat-item cat-item-114"><a href="../product_category/idec/tu-dong-hoa/index.html">Tự Động Hóa</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-939 cat-parent has-child" aria-expanded="false"><a href="../product_category/ifm/index.html">IFM</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-940 cat-parent has-child" aria-expanded="false"><a href="../product_category/ifm/cam-bien-dieu-khien-chuyen-dong-ifm/index.html">Cảm Biến Điều Khiển Chuyển Động IFM</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-941"><a href="../product_category/ifm/cam-bien-dieu-khien-chuyen-dong-ifm/bo-ma-hoa-ifm/index.html">Bộ Mã Hoá IFM</a></li>
                                        <li class="cat-item cat-item-942"><a href="../product_category/ifm/cam-bien-dieu-khien-chuyen-dong-ifm/cam-bien-do-nghieng-ifm/index.html">Cảm Biến Độ Nghiêng IFM</a></li>
                                        <li class="cat-item cat-item-943"><a href="../product_category/ifm/cam-bien-dieu-khien-chuyen-dong-ifm/cam-bien-theo-doi-bang-tai-ifm/index.html">Cảm Biến Theo Dõi Băng Tải IFM</a></li>
                                        <li class="cat-item cat-item-944"><a href="../product_category/ifm/cam-bien-dieu-khien-chuyen-dong-ifm/cam-bien-toc-do-ifm/index.html">Cảm Biến Tốc Độ IFM</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-945 cat-parent has-child" aria-expanded="false"><a href="../product_category/ifm/cam-bien-vi-tri-ifm/index.html">Cảm Biến Vị Trí IFM</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-946"><a href="../product_category/ifm/cam-bien-vi-tri-ifm/bo-khuech-dai-chuyen-mach-ifm/index.html">Bộ Khuếch Đại Chuyển Mạch IFM</a></li>
                                        <li class="cat-item cat-item-947"><a href="../product_category/ifm/cam-bien-vi-tri-ifm/cam-bien-cam-ung-ifm/index.html">Cảm Biến Cảm Ứng IFM</a></li>
                                        <li class="cat-item cat-item-948"><a href="../product_category/ifm/cam-bien-vi-tri-ifm/cam-bien-dien-dung-ifm/index.html">Cảm Biến Điện Dung IFM</a></li>
                                        <li class="cat-item cat-item-949"><a href="../product_category/ifm/cam-bien-vi-tri-ifm/cam-bien-khoang-cach-ifm/index.html">Cảm Biến Khoảng Cách IFM</a></li>
                                        <li class="cat-item cat-item-950"><a href="../product_category/ifm/cam-bien-vi-tri-ifm/cam-bien-quang-dien-ifm/index.html">Cảm Biến Quang Điện IFM</a></li>
                                        <li class="cat-item cat-item-951"><a href="../product_category/ifm/cam-bien-vi-tri-ifm/cam-bien-sieu-am-ifm/index.html">Cảm Biến Siêu Âm IFM</a></li>
                                        <li class="cat-item cat-item-952"><a href="../product_category/ifm/cam-bien-vi-tri-ifm/cam-bien-tu-ifm/index.html">Cảm Biến Từ IFM</a></li>
                                        <li class="cat-item cat-item-953"><a href="../product_category/ifm/cam-bien-vi-tri-ifm/cam-bien-xylanh-ifm/index.html">Cảm Biến Xylanh IFM</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-954 cat-parent has-child" aria-expanded="false"><a href="../product_category/ifm/cong-nghe-an-toan-ifm/index.html">Công Nghệ An Toàn IFM</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-955"><a href="../product_category/ifm/cong-nghe-an-toan-ifm/cam-bien-cam-ung-khong-an-toan-ifm/index.html">Cảm Biến Cảm Ứng Không An Toàn IFM</a></li>
                                        <li class="cat-item cat-item-956"><a href="../product_category/ifm/cong-nghe-an-toan-ifm/kiem-soat-an-toan-ifm/index.html">Kiểm Soát An Toàn IFM</a></li>
                                        <li class="cat-item cat-item-957"><a href="../product_category/ifm/cong-nghe-an-toan-ifm/ro-le-an-toan-ifm/index.html">Rơ-Le An Toàn IFM</a></li>
                                        <li class="cat-item cat-item-958"><a href="../product_category/ifm/cong-nghe-an-toan-ifm/thiet-bi-an-toan-ifm/index.html">Thiết Bị An Toàn IFM</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-959 cat-parent has-child" aria-expanded="false"><a href="../product_category/ifm/he-thong-giam-sat-ifm/index.html">Hệ Thống Giám Sát IFM</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-960"><a href="../product_category/ifm/he-thong-giam-sat-ifm/dong-ho-do-luu-luong-khi-nen-ifm/index.html">Đồng Hồ Đo Lưu Lượng Khí Nén IFM</a></li>
                                        <li class="cat-item cat-item-961"><a href="../product_category/ifm/he-thong-giam-sat-ifm/dong-ho-do-luu-luong-nuoc-ifm/index.html">Đồng Hồ Đo Lưu Lượng Nước IFM</a></li>
                                        <li class="cat-item cat-item-962"><a href="../product_category/ifm/he-thong-giam-sat-ifm/he-thong-giam-sat-chat-luong-dau-ifm/index.html">Hệ Thống Giám Sát Chất Lượng Dầu IFM</a></li>
                                        <li class="cat-item cat-item-963"><a href="../product_category/ifm/he-thong-giam-sat-ifm/he-thong-theo-doi-va-chuan-doan-rung-dong-ifm/index.html">Hệ Thống Theo Dõi Và Chuẩn Đoán Rung Động IFM</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-964 cat-parent has-child" aria-expanded="false"><a href="../product_category/ifm/he-thong-nhan-dang-ifm/index.html">Hệ Thống Nhận Dạng IFM</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-965"><a href="../product_category/ifm/he-thong-nhan-dang-ifm/rfid-125-khz-ifm/index.html">RFID 125 kHz IFM</a></li>
                                        <li class="cat-item cat-item-967"><a href="../product_category/ifm/he-thong-nhan-dang-ifm/rfid-125-khz-voi-giao-dien-as-ifm/index.html">RFID 125 kHz với Giao Diện AS IFM</a></li>
                                        <li class="cat-item cat-item-966"><a href="../product_category/ifm/he-thong-nhan-dang-ifm/rfid-13-56-mhz-ifm/index.html">RFID 13.56 MHz IFM</a></li>
                                        <li class="cat-item cat-item-968"><a href="../product_category/ifm/he-thong-nhan-dang-ifm/rfid-ifm/index.html">RFID IFM</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-765 cat-parent has-child" aria-expanded="false"><a href="../product_category/invt/index.html">INVT</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-766 cat-parent has-child" aria-expanded="false"><a href="../product_category/invt/bien-tan-invt/index.html">Biến Tần INVT</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-840"><a href="../product_category/invt/bien-tan-invt/bien-tan-chuyen-dung-invt/index.html">Biến Tần Chuyên Dụng INVT</a></li>
                                        <li class="cat-item cat-item-839"><a href="../product_category/invt/bien-tan-invt/bien-tan-da-nang-invt/index.html">Biến Tần Đa Năng INVT</a></li>
                                        <li class="cat-item cat-item-841"><a href="../product_category/invt/bien-tan-invt/bien-tan-trung-the-invt/index.html">Biến Tần Trung Thế INVT</a></li>
                                        <li class="cat-item cat-item-844"><a href="../product_category/invt/bien-tan-invt/phu-kien-invt/index.html">Phụ kiện INVT</a></li>
                                        <li class="cat-item cat-item-843"><a href="../product_category/invt/bien-tan-invt/plc-hmi-invt/index.html">PLC-HMI INVT</a></li>
                                        <li class="cat-item cat-item-842"><a href="../product_category/invt/bien-tan-invt/servo-invt/index.html">Servo INVT</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-767"><a href="../product_category/invt/bo-luu-dien-invt-ups/index.html">Bộ Lưu Điện INVT - UPS</a></li>
                                <li class="cat-item cat-item-768"><a href="../product_category/invt/dieu-khien-thang-may-invt/index.html">Điều Khiển Thang Máy INVT</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-100 cat-parent has-child" aria-expanded="false"><a href="../product_category/ls-is/index.html">LS IS</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-103"><a href="../product_category/ls-is/bien-tan-ls/index.html">Biến tần LS</a></li>
                                <li class="cat-item cat-item-104"><a href="../product_category/ls-is/cong-tac-o-cam-ls/index.html">Công tắc &amp; Ổ cắm LS</a></li>
                                <li class="cat-item cat-item-911"><a href="../product_category/ls-is/he-thong-servo/index.html">Hệ Thống Servo</a></li>
                                <li class="cat-item cat-item-913"><a href="../product_category/ls-is/hmi/index.html">HMI</a></li>
                                <li class="cat-item cat-item-914"><a href="../product_category/ls-is/plc/index.html">PLC</a></li>
                                <li class="cat-item cat-item-102"><a href="../product_category/ls-is/thanh-cai-dan-dien-ls-cap-he-thong-busway/index.html">Thanh Cái Dẫn Điện LS Cáp &amp; Hệ Thống (Busway)</a></li>
                                <li class="cat-item cat-item-101"><a href="../product_category/ls-is/thiet-bi-dong-cat-trung-va-ha-the-ls/index.html">Thiết Bị Đóng Cắt Trung Và Hạ Thế LS</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-126 cat-parent has-child" aria-expanded="false"><a href="../product_category/mitsubishi/index.html">Mitsubishi</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-127"><a href="../product_category/mitsubishi/bo-dieu-khien/index.html">Bộ Điều Khiển</a></li>
                                <li class="cat-item cat-item-129"><a href="../product_category/mitsubishi/hien-thi-truc-quan/index.html">Hiển Thị Trực Quan</a></li>
                                <li class="cat-item cat-item-133"><a href="../product_category/mitsubishi/may-gia-cong/index.html">Máy Gia Công</a></li>
                                <li class="cat-item cat-item-184"><a href="../product_category/mitsubishi/robot-cong-nghiep/index.html">Robot công nghiệp</a></li>
                                <li class="cat-item cat-item-128"><a href="../product_category/mitsubishi/san-pham-dan-dong/index.html">Sản Phẩm Dẫn Động</a></li>
                                <li class="cat-item cat-item-131"><a href="../product_category/mitsubishi/san-pham-giam-sat-dien/index.html">Sản Phẩm Giảm Sát Điện</a></li>
                                <li class="cat-item cat-item-130"><a href="../product_category/mitsubishi/san-pham-phan-phoi-dien-ap-thap/index.html">Sản Phẩm Phân Phối Điện Áp Thấp</a></li>
                                <li class="cat-item cat-item-132"><a href="../product_category/mitsubishi/san-pham-phan-phoi-dien-trung-ap/index.html">Sản Phẩm Phân Phối Điện Trung Áp</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-105 cat-parent has-child" aria-expanded="false"><a href="../product_category/omron/index.html">Omron</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-106"><a href="../product_category/omron/cam-bien-omron/index.html">Cảm Biến</a></li>
                                <li class="cat-item cat-item-109"><a href="../product_category/omron/cong-tac/index.html">Công Tắc</a></li>
                                <li class="cat-item cat-item-112"><a href="../product_category/omron/he-thong-tu-dong-hoa/index.html">Hệ Thống Tự Động Hóa</a></li>
                                <li class="cat-item cat-item-108"><a href="../product_category/omron/mo-to-drives/index.html">Mô-Tơ &amp; Drives</a></li>
                                <li class="cat-item cat-item-107"><a href="../product_category/omron/ro-le/index.html">Rơ-le</a></li>
                                <li class="cat-item cat-item-110"><a href="../product_category/omron/thiet-bi-an-toan/index.html">Thiết Bị An Toàn</a></li>
                                <li class="cat-item cat-item-111"><a href="../product_category/omron/thiet-bi-dieu-khien/index.html">Thiết Bị Điều Khiển</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-176 cat-parent has-child" aria-expanded="false"><a href="../product_category/ong-day-khi-dau-noi-khi/index.html">Ống dây khí, Đầu nối khí</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-177"><a href="../product_category/ong-day-khi-dau-noi-khi/nitto/index.html">Nitto</a></li>
                                <li class="cat-item cat-item-178"><a href="../product_category/ong-day-khi-dau-noi-khi/toyox/index.html">Toyox</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-125"><a href="../product_category/panasonic/index.html">Panasonic</a></li>
                        <li class="cat-item cat-item-769 cat-parent has-child" aria-expanded="false"><a href="../product_category/sang-a/index.html">Sang A</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-850"><a href="../product_category/sang-a/dung-cu-khi-nen-sanga/index.html">Dụng Cụ Khí Nén SangA</a></li>
                                <li class="cat-item cat-item-853"><a href="../product_category/sang-a/dau-noi-ong-dan-khi-sanga/index.html">Đầu Nối, Ống Dẫn Khí SangA</a></li>
                                <li class="cat-item cat-item-852"><a href="../product_category/sang-a/thiet-bi-khac-sanga/index.html">Thiết Bị Khác SangA</a></li>
                                <li class="cat-item cat-item-851"><a href="../product_category/sang-a/van-sanga/index.html">Van SangA</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-134 cat-parent has-child" aria-expanded="false"><a href="../product_category/schneider/index.html">Schneider</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-139"><a href="../product_category/schneider/bo-luu-dien-ups/index.html">Bộ lưu điện (UPS)</a></li>
                                <li class="cat-item cat-item-142"><a href="../product_category/schneider/bo-ngat-mach-cong-tac-dien/index.html">Bộ ngắt mạch &amp; công tắc điện</a></li>
                                <li class="cat-item cat-item-136"><a href="../product_category/schneider/cong-tac-o-cam-hop/index.html">Công tắc, Ổ cắm &amp; Hộp</a></li>
                                <li class="cat-item cat-item-140"><a href="../product_category/schneider/khoi-dong-tu/index.html">Khởi động từ</a></li>
                                <li class="cat-item cat-item-137"><a href="../product_category/schneider/nut-bam-cong-tac-den-thi-diem-tram-dieu-khien-va-can-dieu-khien/index.html">Nút bấm, công tắc, đèn thí điểm, trạm điều khiển và cần điều khiển</a></li>
                                <li class="cat-item cat-item-141"><a href="../product_category/schneider/ro-le-bao-ve/index.html">Rơ le bảo vệ</a></li>
                                <li class="cat-item cat-item-138"><a href="../product_category/schneider/thiet-bi-chuyen-mach-trung-the/index.html">Thiết bị chuyển mạch trung thế</a></li>
                                <li class="cat-item cat-item-135"><a href="../product_category/schneider/thiet-bi-model-din-rail/index.html">Thiết bị Model Din rail</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-73 cat-parent has-child" aria-expanded="false"><a href="../product_category/smc/index.html">SMC</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-85"><a href="../product_category/smc/binh-kich-ap/index.html">Bình Kích Áp</a></li>
                                <li class="cat-item cat-item-83"><a href="../product_category/smc/cam-bien/index.html">Cảm Biến</a></li>
                                <li class="cat-item cat-item-76"><a href="../product_category/smc/dau-noi-khi-van-tiet-luu-ong-day-khi/index.html">Đầu Nối Khí, Van Tiết Lưu, Ống Dây Khí</a></li>
                                <li class="cat-item cat-item-75"><a href="../product_category/smc/f-r-l/index.html">F.R.L</a></li>
                                <li class="cat-item cat-item-81"><a href="../product_category/smc/may-lam-mat/index.html">Máy Làm Mát</a></li>
                                <li class="cat-item cat-item-80"><a href="../product_category/smc/may-say-khi/index.html">Máy Sấy Khí</a></li>
                                <li class="cat-item cat-item-82"><a href="../product_category/smc/thiet-bi-chan-khong/index.html">Thiết Bị Chân Không</a></li>
                                <li class="cat-item cat-item-74"><a href="../product_category/smc/thiet-bi-chuan-bi-khi/index.html">Thiết Bị Chuẩn Bị Khí</a></li>
                                <li class="cat-item cat-item-84"><a href="../product_category/smc/thiet-bi-khu-tinh-dien/index.html">Thiết Bị Khử Tĩnh Điện</a></li>
                                <li class="cat-item cat-item-78"><a href="../product_category/smc/van-dieu-khien/index.html">Van Điều Khiển</a></li>
                                <li class="cat-item cat-item-79"><a href="../product_category/smc/xylanh-dien/index.html">Xylanh Điện</a></li>
                                <li class="cat-item cat-item-77"><a href="../product_category/smc/xylanh-khi-xylanh-quay/index.html">Xylanh Khí, Xylanh Quay</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-15 cat-parent has-child" aria-expanded="false"><a href="../product_category/thiet-bi-khac/index.html">Thiết Bị Khác</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-158 cat-parent has-child" aria-expanded="false"><a href="../product_category/thiet-bi-khac/banh-xe/index.html">Bánh xe</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-159"><a href="../product_category/thiet-bi-khac/banh-xe/banh-xe-ethos-singapore/index.html">Bánh xe ETHOS - SINGAPORE</a></li>
                                        <li class="cat-item cat-item-161"><a href="../product_category/thiet-bi-khac/banh-xe/xe-day-hang-prestar/index.html">Xe đẩy hàng Prestar</a></li>
                                        <li class="cat-item cat-item-162"><a href="../product_category/thiet-bi-khac/banh-xe/xe-day-slimcart/index.html">Xe đẩy Slimcart</a></li>
                                        <li class="cat-item cat-item-160"><a href="../product_category/thiet-bi-khac/banh-xe/xe-day-worktainer/index.html">Xe đẩy Worktainer</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-148 cat-parent has-child" aria-expanded="false"><a href="../product_category/thiet-bi-khac/dung-cu-do-luong/index.html">Dụng cụ đo lường</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-152"><a href="../product_category/thiet-bi-khac/dung-cu-do-luong/chieu-cao-gages/index.html">Chiều cao Gages</a></li>
                                        <li class="cat-item cat-item-153"><a href="../product_category/thiet-bi-khac/dung-cu-do-luong/chieu-cao-master/index.html">Chiều cao Master</a></li>
                                        <li class="cat-item cat-item-150"><a href="../product_category/thiet-bi-khac/dung-cu-do-luong/do-luong-ben-trong/index.html">Đo lường bên trong</a></li>
                                        <li class="cat-item cat-item-151"><a href="../product_category/thiet-bi-khac/dung-cu-do-luong/do-quang/index.html">Đo quang</a></li>
                                        <li class="cat-item cat-item-154"><a href="../product_category/thiet-bi-khac/dung-cu-do-luong/do-sau-gages/index.html">Độ sâu Gages</a></li>
                                        <li class="cat-item cat-item-149"><a href="../product_category/thiet-bi-khac/dung-cu-do-luong/giai-phap-do-luong/index.html">Giải pháp đo lường</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-179"><a href="../product_category/thiet-bi-khac/ems-line-and-transfer-car/index.html">EMS Line and Transfer Car</a></li>
                                <li class="cat-item cat-item-168 cat-parent has-child" aria-expanded="false"><a href="../product_category/thiet-bi-khac/van-cong-nghiep/index.html">Van công nghiệp</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-169 cat-parent has-child" aria-expanded="false"><a href="../product_category/thiet-bi-khac/van-cong-nghiep/van-kitz/index.html">Van Kitz</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                            <ul class="children">
                                                <li class="cat-item cat-item-170"><a href="../product_category/thiet-bi-khac/van-cong-nghiep/van-kitz/van-bi/index.html">Van Bi</a></li>
                                                <li class="cat-item cat-item-174"><a href="../product_category/thiet-bi-khac/van-cong-nghiep/van-kitz/van-buom/index.html">Van Bướm</a></li>
                                                <li class="cat-item cat-item-172"><a href="../product_category/thiet-bi-khac/van-cong-nghiep/van-kitz/van-cau/index.html">Van Cầu</a></li>
                                                <li class="cat-item cat-item-171"><a href="../product_category/thiet-bi-khac/van-cong-nghiep/van-kitz/van-cong/index.html">Van Cổng</a></li>
                                                <li class="cat-item cat-item-173"><a href="../product_category/thiet-bi-khac/van-cong-nghiep/van-kitz/van-kiem-tra/index.html">Van Kiểm Tra</a></li>
                                                <li class="cat-item cat-item-175"><a href="../product_category/thiet-bi-khac/van-cong-nghiep/van-kitz/y-strainer/index.html">Y - Strainer</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-836"><a href="../product_category/thuy-luc-khi-nen/index.html">Thủy Lực - Khí Nén</a></li>
                        <li class="cat-item cat-item-969 cat-parent has-child" aria-expanded="false"><a href="../product_category/tm-robot/index.html">TM-Robot</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-971"><a href="../product_category/tm-robot/phu-kien-tm-robot/index.html">Phụ Kiện TM-Robot</a></li>
                                <li class="cat-item cat-item-970"><a href="../product_category/tm-robot/robot-cong-tac-tm-robot/index.html">Robot Công Tác TM-Robot</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-762 cat-parent has-child" aria-expanded="false"><a href="../product_category/tpc/index.html">TPC</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-764"><a href="../product_category/tpc/bo-dieu-khien-toc-do-tpc/index.html">Bộ Điều Khiển Tốc Độ TPC</a></li>
                                <li class="cat-item cat-item-763"><a href="../product_category/tpc/khi-nen-tpc/index.html">Khí Nén TPC</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-86 cat-parent has-child" aria-expanded="false"><a href="../product_category/vessel/index.html">Vessel</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-93 cat-parent has-child" aria-expanded="false"><a href="../product_category/vessel/bo-khu-tinh-dien/index.html">Bộ Khử Tĩnh Điện</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-94"><a href="../product_category/vessel/bo-khu-tinh-dien/bo-khu-tinh-dien-vessel/index.html">Bộ Khử Tĩnh Điện Vessel</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-97 cat-parent has-child" aria-expanded="false"><a href="../product_category/vessel/bo-luc-giac/index.html">Bộ Lục Giác</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-98"><a href="../product_category/vessel/bo-luc-giac/bo-luc-giac-wise/index.html">Bộ Lục Giác Wise</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-87 cat-parent has-child" aria-expanded="false"><a href="../product_category/vessel/dung-cu-cam-tay/index.html">Dụng Cụ Cầm Tay</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-88"><a href="../product_category/vessel/dung-cu-cam-tay/dung-cu-cam-tay-vessel/index.html">Dụng Cụ Cầm Tay Vessel</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-95 cat-parent has-child" aria-expanded="false"><a href="../product_category/vessel/may-ban-oc-chay-bang-xang/index.html">Máy Bắn Ốc Chạy Bằng Xăng</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-96"><a href="../product_category/vessel/may-ban-oc-chay-bang-xang/may-ban-oc-chay-bang-xang-vessel/index.html">Máy Bắn Ốc Chạy Bằng Xăng Vessel</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-89 cat-parent has-child" aria-expanded="false"><a href="../product_category/vessel/mui-vit-va-khop-noi/index.html">Mũi Vít Và Khớp Nối</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-90"><a href="../product_category/vessel/mui-vit-va-khop-noi/mui-vit-va-khop-noi-vessel/index.html">Mũi Vít Và Khớp Nối Vessel</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-91 cat-parent has-child" aria-expanded="false"><a href="../product_category/vessel/sung-khi-nen/index.html">Súng Khí Nén</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-92"><a href="../product_category/vessel/sung-khi-nen/sung-khi-nen-vessel/index.html">Súng Khí Nén Vessel</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-163 cat-parent has-child" aria-expanded="false"><a href="../product_category/vong-bi-day-curoa/index.html">Vòng bi, dây curoa</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-164"><a href="../product_category/vong-bi-day-curoa/bando/index.html">Bando</a></li>
                                <li class="cat-item cat-item-165"><a href="../product_category/vong-bi-day-curoa/nachi/index.html">Nachi</a></li>
                                <li class="cat-item cat-item-166"><a href="../product_category/vong-bi-day-curoa/nsk/index.html">NSK</a></li>
                                <li class="cat-item cat-item-167"><a href="../product_category/vong-bi-day-curoa/skf/index.html">SKF</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-783 cat-parent has-child" aria-expanded="false"><a href="../product_category/wanshsin/index.html">Wanshsin</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-790"><a href="../product_category/wanshsin/bo-giam-toc/index.html">Bộ Giảm Tốc</a></li>
                                <li class="cat-item cat-item-792"><a href="../product_category/wanshsin/bo-giam-toc-banh-rang/index.html">Bộ Giảm Tốc Bánh Răng</a></li>
                                <li class="cat-item cat-item-788"><a href="../product_category/wanshsin/hop-giam-toc/index.html">Hộp Giảm Tốc</a></li>
                                <li class="cat-item cat-item-794"><a href="../product_category/wanshsin/motor-giam-toc/index.html">Motor Giảm Tốc</a></li>
                                <li class="cat-item cat-item-784"><a href="../product_category/wanshsin/motor-giam-toc-trung-binh/index.html">Motor Giảm Tốc Trung Bình</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-143 cat-parent has-child" aria-expanded="false"><a href="../product_category/he-thong-thuy-luc-yuken/index.html">YuKen</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-145"><a href="../product_category/he-thong-thuy-luc-yuken/bo-nguon-thuy-luc/index.html">Bộ nguồn thủy lực</a></li>
                                <li class="cat-item cat-item-185"><a href="../product_category/he-thong-thuy-luc-yuken/van-thuy-luc/index.html">Van thủy lực</a></li>
                                <li class="cat-item cat-item-144"><a href="../product_category/he-thong-thuy-luc-yuken/xylanh-thuy-luc/index.html">Xylanh thủy lực</a></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-917 cat-parent has-child" aria-expanded="false"><a href="../product_category/zebra/index.html">Zebra</a><button class="toggle"><i class="icon-angle-down"></i></button>
                            <ul class="children">
                                <li class="cat-item cat-item-918 cat-parent has-child" aria-expanded="false"><a href="../product_category/zebra/may-in/index.html">Máy In</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-919"><a href="../product_category/zebra/may-in/may-in-cong-nghiep/index.html">Máy In Công Nghiệp</a></li>
                                        <li class="cat-item cat-item-920"><a href="../product_category/zebra/may-in/may-in-di-dong/index.html">Máy In Di Động</a></li>
                                        <li class="cat-item cat-item-921"><a href="../product_category/zebra/may-in/may-in-de-ban/index.html">Máy In Để Bàn</a></li>
                                        <li class="cat-item cat-item-922"><a href="../product_category/zebra/may-in/may-in-rfid/index.html">Máy In RFID</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-923 cat-parent has-child" aria-expanded="false"><a href="../product_category/zebra/may-kiem-kho-android-or-windows-os/index.html">Máy Kiểm Kho (Android or Windows OS)</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-924"><a href="../product_category/zebra/may-kiem-kho-android-or-windows-os/mang-khong-day-ky-thuat-so/index.html">Mạng Không Dây Kỹ Thuật Số</a></li>
                                        <li class="cat-item cat-item-925"><a href="../product_category/zebra/may-kiem-kho-android-or-windows-os/may-kiem-tra-suc-khoe-di-dong/index.html">Máy Kiểm Tra Sức Khoẻ Di Động</a></li>
                                        <li class="cat-item cat-item-926"><a href="../product_category/zebra/may-kiem-kho-android-or-windows-os/may-tinh-bang-zebra/index.html">Máy Tính Bảng Zebra</a></li>
                                        <li class="cat-item cat-item-927"><a href="../product_category/zebra/may-kiem-kho-android-or-windows-os/may-tinh-cam-tay/index.html">Máy Tính Cầm Tay</a></li>
                                        <li class="cat-item cat-item-928"><a href="../product_category/zebra/may-kiem-kho-android-or-windows-os/may-tinh-deo-tren-nguoi/index.html">Máy Tính Đeo Trên Người</a></li>
                                        <li class="cat-item cat-item-929"><a href="../product_category/zebra/may-kiem-kho-android-or-windows-os/may-tinh-xe-nang/index.html">Máy Tính Xe Nâng</a></li>
                                        <li class="cat-item cat-item-930"><a href="../product_category/zebra/may-kiem-kho-android-or-windows-os/thiet-bi-cam-tay-rfid/index.html">Thiết Bị Cầm Tay RFID</a></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-931 cat-parent has-child" aria-expanded="false"><a href="../product_category/zebra/may-quet-ma-vach-va-thu-thap-du-lieu/index.html">Máy Quét Mã Vạch Và Thu Thập Dữ Liệu</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                    <ul class="children">
                                        <li class="cat-item cat-item-932 cat-parent has-child" aria-expanded="false"><a href="../product_category/zebra/may-quet-ma-vach-va-thu-thap-du-lieu/may-quet-da-nang/index.html">Máy Quét Đa Năng</a> <button class="toggle"><i class="icon-angle-down"></i></button>
                                            <ul class="children">
                                                <li class="cat-item cat-item-933"><a href="../product_category/zebra/may-quet-ma-vach-va-thu-thap-du-lieu/may-quet-da-nang/may-quet-cam-tay/index.html">Máy Quét Cầm Tay</a></li>
                                                <li class="cat-item cat-item-934"><a href="../product_category/zebra/may-quet-ma-vach-va-thu-thap-du-lieu/may-quet-da-nang/may-quet-chuyen-dung/index.html">Máy Quét Chuyên Dụng</a></li>
                                                <li class="cat-item cat-item-935"><a href="../product_category/zebra/may-quet-ma-vach-va-thu-thap-du-lieu/may-quet-da-nang/may-quet-co-dinh/index.html">Máy Quét Cố Định</a></li>
                                                <li class="cat-item cat-item-936"><a href="../product_category/zebra/may-quet-ma-vach-va-thu-thap-du-lieu/may-quet-da-nang/may-quet-trong-quay/index.html">Máy Quét Trong Quầy</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-937"><a href="../product_category/zebra/may-tinh-bang/index.html">Máy Tính Bảng</a></li>
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
                    @foreach($all_Product as $product)
                    <div class="product-small col has-hover product type-product post-3071 status-publish instock product_cat-van-bi product_cat-van-cong-nghiep product_cat-van-kitz product_tag-10k-ball-valve-full-bore has-post-thumbnail shipping-taxable product-type-simple">
                        <div class="col-inner">

                            <div class="badge-container absolute left top z-1">
                            </div>
                            <div class="product-small box ">
                                <div class="box-image">
                                    <div class="image-fade_in_back">
                                        <a href="/product/{{$product->PR_alias}}/detail.html" aria-label="10K BALL VALVE FULL BORE">
                                            <img width="247" height="296" src="{{url('resources/upload/product/').'/'.$product->PR_avatar}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"> </a>
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

                    <!-- <div> -->
                </div><!-- row -->
                <div class="container">
                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers nav-pagination links text-center">
                            <li><span aria-current="page" class="page-number current">1</span></li>
                            <li><a class="page-number" href="page/2/index.html">2</a></li>
                            <li><a class="page-number" href="page/3/index.html">3</a></li>
                            <li><a class="page-number" href="page/4/index.html">4</a></li>
                            <li><span class="page-number dots">…</span></li>
                            <li><a class="page-number" href="page/110/index.html">110</a></li>
                            <li><a class="page-number" href="page/111/index.html">111</a></li>
                            <li><a class="page-number" href="page/112/index.html">112</a></li>
                            <li><a class="next page-number" href="page/2/index.html"><i class="icon-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>

            </div><!-- shop container -->
        </div>
    </div>

</main>
@endsection
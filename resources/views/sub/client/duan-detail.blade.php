@extends('layout.index')

@section('content')
<main id="main" class="">

    <div id="content" class="blog-wrapper blog-single page-wrapper">

        <div class="row align-center">
            <div class="large-10 col">
                <article id="post-7217" class="post-7217 post type-post status-publish format-standard has-post-thumbnail hentry category-du-an">
                    <div class="article-inner ">
                        <header class="entry-header">
                            <div class="entry-header-text entry-header-text-top text-left">
                                <h6 class="entry-category is-xsmall">
                                    <a href="http://ipe.vn/category/du-an/" rel="category tag">Dự Án</a>
                                </h6>

                                <h1 class="entry-title">{!! $slider->SL_alt !!}</h1>
                                <div class="entry-divider is-divider small"></div>

                            </div>
                        </header>
                        <div class="entry-content single-page">
                        {!! $slider->SL_detail !!}
                        </div>
                        <nav role="navigation" id="nav-below" class="navigation-post">
                            <div class="flex-row next-prev-nav bt bb">
                                <div class="flex-col flex-grow nav-prev text-left">
                                    <div class="nav-previous"><a href="http://ipe.vn/giai-cau-long-giao-huu-chao-mung-ngay-30-4-va-1-5/" rel="prev"><span class="hide-for-small"><i class="icon-angle-left"></i></span> Giải Cầu Lông Giao Hữu Chào Mừng Ngày 30/4 Và 1/5</a></div>
                                </div>
                                <div class="flex-col flex-grow nav-next text-right">
                                    <div class="nav-next"><a href="http://ipe.vn/may-kiem-tra-lap-rap-dien-thoai-di-dong/" rel="next">Máy Kiểm Tra Lắp Ráp Điện Thoại Di Động <span class="hide-for-small"><i class="icon-angle-right"></i></span></a></div>
                                </div>
                            </div>

                        </nav>

                    </div>
                </article>




                <div id="comments" class="comments-area">





                </div>
            </div>

        </div>

    </div>


</main>
@endsection
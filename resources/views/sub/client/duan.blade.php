@extends('layout.index')

@section('content')
<main id="main" class="">
    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">
                    <div data-elementor-type="wp-page" data-elementor-id="7144" class="elementor elementor-7144" data-elementor-settings="[]">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-ff51fb7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ff51fb7" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5209bde" data-id="5209bde" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-78f5dcf elementor-widget elementor-widget-heading" data-id="78f5dcf" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h1 class="elementor-heading-title elementor-size-default">Dự Án</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-f4cdd91 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f4cdd91" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-231d073" data-id="231d073" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        @foreach($a_Slider as $all_Products)
                                                        <div class="elementor-element elementor-element-67d4f56 elementor-cta--layout-image-left elementor-cta--valign-middle elementor-cta--skin-classic elementor-animated-content elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-call-to-action" data-id="67d4f56" data-element_type="widget" data-widget_type="call-to-action.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-cta">
                                                                    <div class="elementor-cta__bg-wrapper">
                                                                        <div class="elementor-cta__bg elementor-bg" style="background-image: url(../wp-content/uploads/2021/07/1.jpg);"></div>
                                                                        <div class="elementor-cta__bg-overlay"></div>
                                                                    </div>
                                                                    <div class="elementor-cta__content">

                                                                        <h1 class="elementor-cta__title elementor-cta__content-item elementor-content-item">
                                                                            {{$all_Products->SL_alt}} </h1>

                                                                        <div class="elementor-cta__description elementor-cta__content-item elementor-content-item">
                                                                        {!!$all_Products->SL_detail!!} </div>

                                                                        <div class="elementor-cta__button-wrapper elementor-cta__content-item elementor-content-item ">
                                                                            <a class="elementor-cta__button elementor-button elementor-size-sm" href="/du-an/{{$all_Products->SL_en_id}}">
                                                                                Xem Thêm </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <!-- <div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


</main>
@endsection
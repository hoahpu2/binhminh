<div class="header_bottom">
    <div class="header_bottom_left">
        <div class="section group">
            @if($news)
                @foreach($news as $item)
                    <div class="listview_1_of_2 images_1_of_2">
                        <a href="{{url('tin-tuc')."/".$item->N_alias}}"> <img src="{{asset('resources/upload/news/'.$item->N_avatar)}}" alt=""  class="tin-tuc-img"/></a>
                        <p class="tin-tuc-icon">Tin tuc</p>
                        <a href="{{url('tin-tuc')."/".$item->N_alias}}" class="new-title">
                            <p>{{$item->N_title}}</p>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_bottom_right_images">
        <!-- FlexSlider -->
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    @foreach($slider as $item)
                    <li><img src="{{asset('resources/upload/slider/'.$item->SL_url)}}" alt=""/></li>
                        @endforeach
                </ul>
            </div>
        </section>
        <!-- FlexSlider -->
    </div>
    <div class="clear"></div>
</div>
</div>
<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
<script type="text/javascript">

    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
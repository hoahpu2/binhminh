<div class="header_bottom">
    <div class="header_bottom_left">
        <div class="section group">
            <div class="listview_1_of_2 images_1_of_2">
                <a href="preview.html"> <img src="{{asset('images/IMG_2539.JPG')}}" alt=""  class="tin-tuc-img"/></a>
                <p class="tin-tuc-icon">Tin tuc</p>
                <a href="" class="new-title">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, fuga.</p>
                </a>
            </div>
 <div class="listview_1_of_2 images_1_of_2">
                <div class="">
                    <a href="preview.html"> <img src="{{asset('images/IMG_2540.JPG')}}" alt=""  class="tin-tuc-img"/></a>
                </div>
     <div class="new-title">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, fuga.</p>
     </div>
            </div>
 <div class="listview_1_of_2 images_1_of_2">
                <div class="">
                    <a href="preview.html"> <img src="{{asset('images/IMG_2557.JPG')}}" alt=""  class="tin-tuc-img"/></a>
                </div>
     <div class="new-title">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, fuga.</p>
     </div>
            </div>
 <div class="listview_1_of_2 images_1_of_2">
                <div class="">
                    <a href="preview.html"> <img src="{{asset('images/IMG_2558.JPG')}}" alt=""  class="tin-tuc-img"/></a>
                </div>
     <div class="new-title">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, fuga.</p>
     </div>
            </div>

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
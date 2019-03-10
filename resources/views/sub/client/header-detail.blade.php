<div class="header_bottom">
    <div class="header_bottom_left">
        <div class="section group">
            <div class="listview_1_of_2 images_1_of_2">
                <div class="listimg listimg_2_of_1">
                    <a href="preview.html"> <img src="{{asset('images/pic4.png')}}" alt="" /></a>
                </div>
                <div class="text list_2_of_1">
                    <h2>Iphone</h2>
                    <p>Lorem ipsum dolor sit amet sed do eiusmod.</p>
                    <div class="button"><span><a href="preview.html">Add to cart</a></span></div>
                </div>
            </div>
            <div class="listview_1_of_2 images_1_of_2">
                <div class="listimg listimg_2_of_1">
                    <a href="preview-5.html"><img src="{{asset('images/pic3.png')}}" alt="" ></a>
                </div>
                <div class="text list_2_of_1">
                    <h2>Samsung</h2>
                    <p>Lorem ipsum dolor sit amet, sed do eiusmod.</p>
                    <div class="button"><span><a href="preview-5.html">Add to cart</a></span></div>
                </div>
            </div>
        </div>
        <div class="section group">
            <div class="listview_1_of_2 images_1_of_2">
                <div class="listimg listimg_2_of_1">
                    <a href="preview-3.html"> <img src="{{asset('images/pic3.jpg')}}" alt="" /></a>
                </div>
                <div class="text list_2_of_1">
                    <h2>Acer</h2>
                    <p>Lorem ipsum dolor sit amet, sed do eiusmod.</p>
                    <div class="button"><span><a href="preview-3.html">Add to cart</a></span></div>
                </div>
            </div>
            <div class="listview_1_of_2 images_1_of_2">
                <div class="listimg listimg_2_of_1">
                    <a href="preview-6.html"><img src="{{asset('images/pic1.png')}}" alt="" /></a>
                </div>
                <div class="text list_2_of_1">
                    <h2>Canon</h2>
                    <p>Lorem ipsum dolor sit amet, sed do eiusmod.</p>
                    <div class="button"><span><a href="preview-6.html">Add to cart</a></span></div>
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
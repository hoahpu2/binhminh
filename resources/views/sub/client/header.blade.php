<div class="header">
        <div class="header_top">
            <div class="logo">
                <a href="index.html"><img src="{{asset('images/logo.png')}}"  width="50%" alt="" /></a>
            </div>
              <div class="header_top_right">
                <div class="search_box">
                    <form>
                        <input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
                    </form>
                </div>
                <div class="shopping_cart">
                    <div class="cart">
                        <a href="#" title="View my shopping cart" rel="nofollow">
                            <strong class="opencart"> </strong>
                                <span class="cart_title">Cart</span>
                                    <span class="no_product">(empty)</span>
                            </a>
                        </div>
                  </div>
        <div class="languages" title="language">
            <div id="language" class="wrapper-dropdown" tabindex="1">VN
                        <strong class="opencart"> </strong>
                        <ul class="dropdown languges">                  
                             <li>
                                <a href="#" title="VietNam">
                                    <span><img src="{{asset('images/gb.png')}}" alt="vn" width="26" height="26"></span><span class="lang">VietNam</span>
                                </a>
                             </li>                  
                   </ul>
             </div>
             <script type="text/javascript">
            function DropDown(el) {
                this.dd = el;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    }); 
                }
            }

            $(function() {

                var dd = new DropDown( $('#language') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown').removeClass('active');
                });

            });

        </script>
         </div>
            <div class="currency" title="currency">
                    <div id="currency" class="wrapper-dropdown" tabindex="1">$
                        <strong class="opencart"> </strong>
                        <ul class="dropdown">
                            <li><a href="#"><span>$</span>Dollar</a></li>
                            <li><a href="#"><span>€</span>Euro</a></li>
                        </ul>
                    </div>
                     <script type="text/javascript">
            function DropDown(el) {
                this.dd = el;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    }); 
                }
            }

            $(function() {

                var dd = new DropDown( $('#currency') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown').removeClass('active');
                });

            });

        </script>
   </div>
           <div class="login">
               <span><a href="login.html"><img src="{{asset('images/login.png')}}" alt="" title="login"/></a></span>
           </div>
         <div class="clear"></div>
     </div>
     <div class="clear"></div>
 </div>
    <div class="h_menu">
        <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
        <nav>
        <ul class="menu list-unstyled">
            <li><a href="index.html">HOME</a></li>
            <li class="activate"><a href="products.html">Products</a>
            </li>
            <li><a href="products.html">Top Brand</a>           
            </li>       
            <li><a href="faq.html">Services</a>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="#">Delivery</a></li>
            <li><a href="faq.html">Faqs</a></li>
            <li><a href="contact.html">CONTACT</a></li>
            <div class="clear"> </div>
        </ul>
        </nav> 
        <script src="{{asset('js/menu.js')}}" type="text/javascript"></script>
        </div>

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
                          <a href="preview-5.html"><img src="{{asset('images/pic3.png')}}" alt="" / ></a>
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
                        <li><img src="{{asset('images/1.jpg')}}" alt=""/></li>
                        <li><img src="{{asset('images/2.jpg')}}" alt=""/></li>
                        <li><img src="{{asset('images/3.jpg')}}" alt=""/></li>
                        <li><img src="{{asset('images/4.jpg')}}" alt=""/></li>
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
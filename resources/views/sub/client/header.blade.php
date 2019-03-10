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
            <li><a href="index.html">HOME </a></li>
            <?php foreach ($category as $item): ?>
            <li class="activate"><a href="products.html">{{$item->CA_name}}</a>
            </li>
            <?php endforeach; ?>
            <div class="clear"> </div>
        </ul>
        </nav> 
        <script src="{{asset('js/menu.js')}}" type="text/javascript"></script>
        </div>

</div>
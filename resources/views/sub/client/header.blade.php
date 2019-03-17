<div class="header">
        <div class="header_top">
            <div class="logo">
                <a href="/"><img src="{{asset('images/logo.png')}}" class="image-logo"alt="" /></a>
            </div>
              <div class="header_top_right">
                <div class="search_box">
                    <form>
                        <input type="text" value="Nhập tên sản phẩm bạn muốn tìm kiếm ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nhập tên sản bạn muốn tìm';}"><input type="submit" value="Tìm kiếm">
                    </form>
                </div>
                <div class="shopping_cart">
                    <div class="cart">
                        <a href="#" title="View my shopping cart" rel="nofollow">
                            <strong class="opencart"> </strong>
                                <span class="cart_title">Giỏ hàng</span>
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
                  <div class="social-icons" style="float:right;padding-top: 10px;   ">
                      <ul>
                          <li class="facebook"><a href="#" target="_blank"> </a></li>
                          <li class="twitter"><a href="#" target="_blank"> </a></li>
                          <li class="googleplus"><a href="#" target="_blank"> </a></li>
                          <li class="contact"><a href="#" target="_blank"> </a></li>
                          <div class="clear"></div>
                      </ul>
                  </div>
                  <div class="hotline-phone">
                      <h2>Hotline: 0989797979</h2>
                  </div>
         <div class="clear"></div>
     </div>
     <div class="clear"></div>
 </div>
    <div class="h_menu">
        <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
        <nav>
        <ul class="menu list-unstyled">
            <li><a href="/">HOME </a></li>
            <?php foreach ($category as $item): ?>
            <li class="activate"><a {{-- href="{{url('danh-muc').'/'.$item->CA_alias}}" --}}>{{$item->CA_name}}</a>
              @if(!empty($item->sub_category))
                <ul class="menu-second">
                  @foreach($item->sub_category as $sub_cate)
                    <li><a href="">{{$sub_cate['CA_name']}}</a></li>
                  @endforeach
                </ul>
              @endif
            </li>
            <?php endforeach; ?>
            <li><a href="{{url('tin-tuc')}}">TIN TUC </a>
            </li>
            <li><a href="{{url('lien-he')}}">LIEN HE </a></li>
            <div class="clear"> </div>
        </ul>
        </nav> 
        <script src="{{asset('js/menu.js')}}" type="text/javascript"></script>
        </div>

</div>
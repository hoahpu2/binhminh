<div class="header">
        <div class="header_top">
            <div class="logo">
                <a href="/"><img src="{{asset('images/logo.png')}}" class="image-logo"alt="" /></a>
            </div>
              <div class="header_top_right">
                <div class="search_box">
                    <form action="{{route('search')}}" method="post">
                        @csrf
                        <input type="text" name="product" value="{{isset($name) ? $name : '' }}" placeholder="Nhập tên sản phẩm bạn muốn tìm kiếm ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nhập tên sản bạn muốn tìm';}"><input type="submit" value="Tìm kiếm">
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
               <span><a href="/"><img src="{{asset('images/login.png')}}" alt="" title="login"/></a></span>
           </div>
                  <div class="social-icons" style="float:right;padding-top: 10px;   ">
                      <ul>
                          <li class="facebook"><a href="{{$contactAdmin->CT_linkFace}}" target="_blank"> </a></li>
                          <li class="twitter"><a href="{{$contactAdmin->CT_linkFace}}" target="_blank"> </a></li>
                          <li class="googleplus"><a href="{{$contactAdmin->CT_linkFace}}" target="_blank"> </a></li>
                          <li class="contact"><a href="{{url('lien-he')}}" target="_blank"> </a></li>
                          <div class="clear"></div>
                      </ul>
                  </div>
                  <div class="hotline-phone">
                      <h2>Hotline: {{$contactAdmin->CT_number}}</h2>
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
            <li class="activate menu-main"><a>{{$item->CA_name}}
                @if(!empty($item->sub_category))
                        <span class="icon-menu"><img src="{{asset('images/down.png')}}" width="10px" alt=""></span>
                    @endif
                </a>
              @if(!empty($item->sub_category))
                <ul class="menu-second">
                  @foreach($item->sub_category as $sub_cate)
                    <li><a href="{{url('danh-sach-san-pham/danh-muc'.'/'.$sub_cate['CA_alias'])}}">{{$sub_cate['CA_name']}}</a></li>
                  @endforeach
                </ul>
              @endif
            </li>
            <?php endforeach; ?>
            <li><a href="{{url('tin-tuc')}}">TIN TỨC </a>
            </li>
            <li><a href="{{url('lien-he')}}">LIÊN HỆ </a></li>
            <div class="clear"> </div>
        </ul>
        </nav> 
        <script src="{{asset('js/menu.js')}}" type="text/javascript"></script>
        </div>

</div>
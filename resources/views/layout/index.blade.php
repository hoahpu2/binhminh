<!DOCTYPE HTML>
<html>
<head>
<title>binhminhcar</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css" media="all"/>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/script.js')}}" type="text/javascript"></script>
</head>
<body>
  <div class="wrap">
    <!--start header-->
        @include('sub.client.header')
    <!-- end header -->
    <!-- start main-->
        @include('sub.client.main')
    <!-- end main -->
    <!-- start footer-->
    @include('sub.client.footer')
    <!-- end footer-->
    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' />
                              <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
                              <script type="text/javascript">
                                $(function(){
                                  SyntaxHighlighter.all();
                                });
                                $(window).load(function(){
                                  $('.flexslider').flexslider({
                                    animation: "slide",
                                    start: function(slider){
                                      $('body').removeClass('loading');
                                    }
                                  });
                                });
                              </script>
</body>
</html>


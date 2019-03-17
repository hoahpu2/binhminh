<!DOCTYPE HTML>
<html>
<head>
    <title>binhminhcar</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}" type="text/javascript"></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('js/jquery.exzoom.js')}}"></script>
    <link href="{{asset('css/jquery.exzoom.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/style-detail.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/fontawesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{asset('css/style-all.css')}}" rel="stylesheet" type="text/css" media="all"/>



    <style>
        body{
            font-family:Arial, "Helvetica Neue", "Helvetica", Tahoma, Verdana, sans-serif;
        }
        #exzoom{
            width: 400px;
        }
        @media screen and (max-width: 500px){
            #exzoom{
                width: 200px;
            }
        }

        .hidden { display: none; }
    </style>
</head>
<body>
<div style="float:right;position: fixed; margin-top:550px; margin-left:20px; z-index: 1;" > <a href="tel:+13174562564"><img src="{{asset('images/phone.gif')}}" class="hotline"  width="80px"  alt=""></a></div>
<div class="wrap">
    <!--start header-->
@include('sub.client.header')
<!-- end header -->
    <!-- start main-->
    @yield('content')
    <!-- end main -->
    <!-- start footer-->
</div>
@include('sub.client.footer')
<!-- end footer-->
<!-- Begin of Chaport Live Chat code -->
<script type="text/javascript">
    (function(w,d,v3){
        w.chaportConfig = { appId : '5c851d2996553c1ae0d27ae7' };

        if(w.chaport)return;v3=w.chaport={};v3._q=[];v3._l={};v3.q=function(){v3._q.push(arguments)};v3.on=function(e,fn){if(!v3._l[e])v3._l[e]=[];v3._l[e].push(fn)};var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://app.chaport.com/javascripts/insert.js';var ss=d.getElementsByTagName('script')[0];ss.parentNode.insertBefore(s,ss)})(window, document);
</script>
<!-- End of Chaport Live Chat code -->
</body>
</html>
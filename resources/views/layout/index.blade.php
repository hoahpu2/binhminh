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
    <link href="{{asset('css/style-all.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}" type="text/javascript"></script>
</head>
<body>
{{--<img src="{{asset('images/preview-img5.jpg')}}" class="quangcao-phai">--}}
{{--<img src="{{asset('images/bo.jpg')}}" class="quangcao-trai">--}}
<div style="float: right; position: fixed; bottom:20px;z-index: 1;" > <a href="{{$contactAdmin->phone}}"><img src="{{asset('images/phone.gif')}}" class="hotline"  width="70px"  alt=""></a></div>
<div class="wrap">
    <!--start header-->
@include('sub.client.header')
<!-- end header -->
    <!-- start main-->
@yield('content')
<!-- end main -->
</div>
<!-- start footer-->
@include('sub.client.footer')
<!-- end footer-->
<link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' />
<!-- Begin of Chaport Live Chat code -->
<script type="text/javascript">
    (function(w,d,v3){
        w.chaportConfig = { appId : '5c851d2996553c1ae0d27ae7' };

        if(w.chaport)return;v3=w.chaport={};v3._q=[];v3._l={};v3.q=function(){v3._q.push(arguments)};v3.on=function(e,fn){if(!v3._l[e])v3._l[e]=[];v3._l[e].push(fn)};var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://app.chaport.com/javascripts/insert.js';var ss=d.getElementsByTagName('script')[0];ss.parentNode.insertBefore(s,ss)})(window, document);
</script>
<!-- End of Chaport Live Chat code -->
</body>
</html>
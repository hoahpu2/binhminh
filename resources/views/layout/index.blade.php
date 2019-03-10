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
</head>
<body>
  <div class="wrap">
    <!--start header-->
        @include('sub.client.header')
    <!-- end header -->
    <!-- start main-->
      @yield('content')
    <!-- end main -->
    <!-- start footer-->
    @include('sub.client.footer')
    <!-- end footer-->
    <link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' />

  </div>
</body>
</html>


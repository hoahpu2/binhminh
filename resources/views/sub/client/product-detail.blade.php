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
<div class="wrap">
    <!--start header-->
@include('sub.client.header-detail')
<!-- end header -->
    <!-- start main-->
    @include('sub.client.main-detail')

    <script type="text/javascript">

        $('.container').imagesLoaded( function() {
            $("#exzoom").exzoom({
                autoPlay: false,
            });
            $("#exzoom").removeClass('hidden')
        });

    </script>
    <!-- end main -->
    <!-- start footer-->
{{--@include('sub.client.footer')--}}
<!-- end footer-->
    <link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' />
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
            $('.gallery-responsive').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
        });

    </script>
</body>
</html>
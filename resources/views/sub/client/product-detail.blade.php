<!DOCTYPE html>
<html>
<head>
<title></title>

<link rel="stylesheet" href="{{asset('css/etalage.css')}}" type="text/css" media="all" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="{{asset('js/jquery.min.js')}}"></script>

<script src="{{asset('js/jquery.etalage.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css" media="all"/>

</head>
<script>
            jQuery(document).ready(function($){

                $('#etalage').etalage({
                    thumb_image_width: 300,
                    thumb_image_height: 400,
                    source_image_width: 900,
                    source_image_height: 1200,
                    show_hint: true,
                    click_callback: function(image_anchor, instance_id){
                        alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                    }
                });

            });
        </script>

<body> 
    <!-- start header -->
        @include('sub.client.header-detail')
    <!-- end header-->
     <div class="container"> 
        
        <div class=" single_top">
            <div class="single_grid" style="height: 100px">
                <div class="grid images_3_of_2">
                        <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image" src="{{asset('images/s4.jpg')}}"" class="img-responsive" />
                                    <img class="etalage_source_image" src="{{asset('images/si4.jpg')}}"" class="img-responsive" title="" />
                                </a>
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="{{asset('images/s2.jpg')}}"" class="img-responsive" />
                                <img class="etalage_source_image" src="{{asset('images/si2.jpg')}}"" class="img-responsive" title="" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="{{asset('images/s3.jpg')}}"" class="img-responsive"  />
                                <img class="etalage_source_image" src="{{asset('images/si3.jpg')}}"" class="img-responsive"  />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="{{asset('images/s1.jpg')}}"" class="img-responsive"  />
                                <img class="etalage_source_image" src="{{asset('images/si1.jpg')}}"" class="img-responsive"  />
                            </li>
                        </ul>
                         <div class="clearfix"> </div>      
                </div> 
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
            
        <!-- start footer -->
            @include('sub.client.footer')
        <!-- end footer -->
</body>
</html>
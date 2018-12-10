<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmldemo.magikthemes.com/ecommerce/brezza-html-template/furniture/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 16:49:58 GMT -->
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons Icon -->
    <link rel="icon" href="http://htmldemo.magikthemes.com/ecommerce/brezza-html-template/furniture/favicon.ico" type="image/x-icon" />
    <title>PHOTON LIGHTNINGS</title>
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mobile-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/revslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,500,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="cms-index-index cms-home-page">
<div id="page">
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
</div>
<!-- JavaScript -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.mobile-menu.min.js')}}"></script>
<script src="{{asset('js/common.js')}}"></script>
<script src="{{asset('js/revslider.js')}}"></script>
<script src="{{asset('js/countdown.js')}}"></script>

<!-- Hot Deals Timer 1-->
<script>
    var dthen1 = new Date("12/25/19 11:59:00 PM");
    start = "08/04/18 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if (CountStepper > 0)
        ddiff = new Date((dnow1) - (dthen1));
    else
        ddiff = new Date((dthen1) - (dnow1));
    gsecs1 = Math.floor(ddiff.valueOf() / 1000);
    var iid1 = "countbox_1";
    CountBack_slider(gsecs1, "countbox_1", 1);
</script>
</body>

<!-- Mirrored from htmldemo.magikthemes.com/ecommerce/brezza-html-template/furniture/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 16:49:58 GMT -->
</html>
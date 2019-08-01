<!DOCTYPE html>
<html>
<head>
    <title>Smart Nifty  @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <style type="text/css">
        /*.footer_menu_widget ul li{
            list-style: disc;
        }

        .footer_menu_widget ul li a{
            font-size: 14px;
            color: #72869c;
        }*/
    </style>

    @yield('css_part')
</head>
<body>
    @include('front.parts.head')

    <div class="">
        @yield('content')
    </div>

    
    @include('front.parts.foot')    

    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/loopcounter.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>


    @yield('js_script')


</body>
</html>
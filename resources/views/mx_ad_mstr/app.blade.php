<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Area</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/font-awesome/css/font-awesome.min.css') }}">

        <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/Ionicons/css/ionicons.min.css') }}">

        <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/AdminLTE.min.css') }}">

        <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/skins/_all-skins.min.css') }}">

        <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/morris.js/morris.css') }}">

        <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/jvectormap/jquery-jvectormap.css') }}">

        <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">

        <link rel="stylesheet" href="{{ asset('admin_assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">

        <link rel="stylesheet" href="{{ asset('admin_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        @yield('css_part')
    </head>

    <body class="hold-transition skin-blue sidebar-mini">

        <div class="wrapper">
            @include('mx_ad_mstr.parts.head')



            <aside class="main-sidebar">

                <section class="sidebar">

                    
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="">
                            <a href="/mx_ad_mstr">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="/h__p_news">
                                <i class="fa fa-newspaper-o"></i> <span>Homepage News</span>
                            </a>
                        </li>

                    </ul>
                </section>

            </aside>

        
            @yield('content')
        

            @include('mx_ad_mstr.parts.foot')
        </div>

        @yield('js_script')


    </body>
</html>
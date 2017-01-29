<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Panel {{ getSettings() }} | @yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="{!! Request::root() !!}/public/admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    {!! Html::style('public/admin/plugins/bootstrap/css/bootstrap.css') !!}

    <!-- Waves Effect Css -->
    {!! Html::style('public/admin/plugins/node-waves/waves.css') !!}

    <!-- Animation Css -->
    {!! Html::style('public/admin/plugins/animate-css/animate.css') !!}

    <!-- Morris Chart Css-->
    {!! Html::style('public/admin/plugins/morrisjs/morris.css') !!}

    <!-- Custom Css -->
    {!! Html::style('public/admin/css/style.css') !!}

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    {!! Html::style('public/admin/css/themes/all-themes.css') !!}

    <!-- Sweetalert Css -->
    {!! Html::style('public/admin/alert/sweetalert.css') !!}

    @yield('header')
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->

   @include('admin.layouts.menu')

   @include('admin.layouts.sidebar')

   @yield('content')

      <!-- Jquery Core Js -->
      {!! Html::script('public/admin/plugins/jquery/jquery.min.js') !!}

      <!-- Bootstrap Core Js -->
      {!! Html::script('public/admin/plugins/bootstrap/js/bootstrap.js') !!}

      <!-- Select Plugin Js -->
    <!-- {!! Html::script('admin/plugins/bootstrap-select/js/bootstrap-select.js') !!}-->

      <!-- Slimscroll Plugin Js -->
      {!! Html::script('public/admin/plugins/jquery-slimscroll/jquery.slimscroll.js') !!}

      <!-- Waves Effect Plugin Js -->
      {!! Html::script('public/admin/plugins/node-waves/waves.js') !!}

      <!-- Jquery CountTo Plugin Js -->
      {!! Html::script('public/admin/plugins/jquery-countto/jquery.countTo.js') !!}

      <!-- Morris Plugin Js -->
      {!! Html::script('public/admin/plugins/raphael/raphael.min.js') !!}
      {!! Html::script('public/admin/plugins/morrisjs/morris.js') !!}

      <!-- ChartJs -->
      {!! Html::script('public/admin/plugins/chartjs/Chart.bundle.js') !!}


      <!-- Sparkline Chart Plugin Js -->
      {!! Html::script('public/admin/plugins/jquery-sparkline/jquery.sparkline.js') !!}
      <!-- Custom Js -->
      {!! Html::script('public/admin/js/admin.js') !!}




      @yield('footer')
            <!-- Demo Js -->
            {!! Html::script('public/admin/js/demo.js') !!}
  </body>
  </html>

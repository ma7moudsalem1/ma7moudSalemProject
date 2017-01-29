<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin | @yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="{!! Request::root() !!}public/admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    {!! Html::style('public/admin/plugins/bootstrap/css/bootstrap.css') !!}

    <!-- Waves Effect Css -->
    {!! Html::style('public/admin/plugins/node-waves/waves.css') !!}

    <!-- Animation Css -->
    {!! Html::style('public/admin/plugins/animate-css/animate.css') !!}

    <!-- Custom Css -->
    {!! Html::style('public/admin/css/style.css') !!}

    @yield('header')
</head>

@yield('content')

<!-- Jquery Core Js -->
{!! Html::script('public/admin/plugins/jquery/jquery.min.js') !!}

<!-- Bootstrap Core Js -->
{!! Html::script('public/admin/plugins/bootstrap/js/bootstrap.js') !!}

<!-- Waves Effect Plugin Js -->
{!! Html::script('public/admin/plugins/node-waves/waves.js') !!}

<!-- Custom Js -->
{!! Html::script('public/admin/js/admin.js') !!}


@yield('footer')

</body>

</html>

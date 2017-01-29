<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ getSettings() | 404 Error }}</title>
    <meta name="keywords" content="{{ getSettings('keywords') }}">
		<meta name="description" content="{{ getSettings('dis') }}">
		<link rel="icon" href="{{ checkImage(getMainImages('Website Icon')) }}">
		<meta property="og:title" content="{{ getSettings() }}" />
		<meta property="og:image" content="{{ checkImage(getMainImages('Social Share')) }}" />
		<meta property="og:descriptio" content="{{ getSettings('dis') }}" />
		<meta property="og:type" content="website">
		<meta property="og:og:site_name" content="{{ Request::root() }}">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    @yield('header')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>

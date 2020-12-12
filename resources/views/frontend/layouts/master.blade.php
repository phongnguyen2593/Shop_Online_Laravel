<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Junko - Siêu thị tiện lợi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/assets/img/favicon.ico">

    <!-- CSS 
========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/frontend/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/frontend/assets/css/style.css">

    @yield('css')
</head>

<body>

    <!--header area start-->
    @include('frontend.includes.header')

    @yield('slider')

    @yield('content')

    <!--footer area start-->
    @include('frontend.includes.footer')

    <!-- JS
============================================ -->

    <!-- Plugins JS -->
    <script src="/frontend/assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="/frontend/assets/js/main.js"></script>

    @yield('script')
</body>

</html>

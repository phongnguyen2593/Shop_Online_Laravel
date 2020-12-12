<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>JUNKO - Trang quản lý</title>
<!--favicon-->
<link rel="icon" href="/backend/dashboard/assets/images/favicon.ico" type="image/x-icon">
<!-- Vector CSS -->
<link href="/backend/dashboard/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
<!-- simplebar CSS-->
<link href="/backend/dashboard/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
<!-- Bootstrap core CSS-->
<link href="/backend/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />
<!-- animate CSS-->
<link href="/backend/dashboard/assets/css/animate.css" rel="stylesheet" type="text/css" />
<!-- Icons CSS-->
<link href="/backend/dashboard/assets/css/icons.css" rel="stylesheet" type="text/css" />
<!-- Sidebar CSS-->
<link href="/backend/dashboard/assets/css/sidebar-menu.css" rel="stylesheet" />
<!-- Custom Style-->
<link href="/backend/dashboard/assets/css/app-style.css" rel="stylesheet" />
<!-- Toasrt -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @yield('head')
</head>

<body class="bg-theme bg-theme1">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('backend.includes.sidebar')

        <!--Start topbar header-->
        @include('backend.includes.topbar')

        <div class="clearfix"></div>

        @yield('content')
        
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        @include('backend.includes.footer')

        @include('backend.includes.color-switcher')
    </div>
    <!--End wrapper-->

    @include('backend.includes.script')

    @yield('script')


</body>

</html>

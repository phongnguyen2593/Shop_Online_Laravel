<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.includes.head')

    @yield('head')
</head>

<body class="bg-theme bg-theme1">

    <!-- start loader -->
    {{-- <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div> --}}
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

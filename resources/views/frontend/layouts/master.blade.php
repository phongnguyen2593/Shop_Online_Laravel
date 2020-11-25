<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    @include('frontend.includes.head')
    
    @yield('css')
</head>

<body>
    {{-- <a href="offer.html"><img src="/frontend/shop/images/download.png"
            class="img-head" alt=""></a> --}}

    @include('frontend.includes.header')
    <!---->

    @yield('video')

    <!-- Carousel
    ================================================== -->
    @yield('carousel')
    <!-- /.carousel -->

    <!--content-->
    @yield('banner')

    <!--content-->
    @yield('content')
    <!--content-->

    <!--content-->
    @yield('product')

    @include('frontend.includes.footer')

    @include('frontend.includes.script')
    
    @yield('modal')

    @yield('script')

</body>

</html>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

@include('frontend.includes.head')

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
    @yield('content-top')

    <!--content-->
    @yield('content-mid')
    <!--content-->

    <!--content-->
    @yield('product')

    @include('frontend.includes.footer')

    @include('frontend.includes.script')
    
    @yield('modal')

</body>

</html>

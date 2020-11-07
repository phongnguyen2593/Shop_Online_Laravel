<!doctype html>
<html class="no-js" lang="en">

@include('backend.includes.head')

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    @include('backend.includes.sidebar')

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        
         @include('backend.includes.navbar')

        @yield('title')
        
        @yield('content')
        
        @include('backend.includes.footer')
    </div>

    @include('backend.includes.script')
</body>

</html>

@extends('frontend.layouts.master')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>Đăng nhập</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer login start -->
    <div class="customer_login mt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3"></div>
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>Đăng nhập</h2>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <p>
                                <label>Email <span>*</span></label>
                                <input type="text" name="email">
                            </p>
                            <p>
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="password">
                            </p>
                            <div class="login_submit">
                                <a href="#">Quên mật khẩu? &nbsp</a>
                                <a href="{{ route('register') }}"> Đăng ký</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Ghi nhớ
                                </label>
                                <button type="submit">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--login area start-->
            </div>
        </div>
    </div>
    <!-- customer login end -->
@endsection

@extends('frontend.layouts.master')

@section('content-top')
    <div class="banner-top">
        <div class="container">
            <h3>Đăng nhập</h3>
            <h4><a href="index.html">Trang chủ</a><label>/</label>Đăng nhập</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection

@section('content-mid')
    <div class="login">

        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Đăng nhập</h3>
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="text" value="Email" name="email" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" value="Mật khẩu" name="password" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Password';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Đăng nhập">
                </form>
            </div>
            <div class="forg">
                <a href="#" class="forg-left">Quên mật khẩu</a>
                <a href="{{ route('register') }}" class="forg-right">Đăng ký</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection

@extends('frontend.layouts.master')

@section('content-top')
    <div class="banner-top">
        <div class="container">
            <h3>Đăng ký</h3>
            <h4><a href="{{ route('home') }}">Trang chủ</a><label>/</label>Đăng ký</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection

@section('content-mid')
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile form1">
                <h3>Đăng ký</h3>   
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    
                    <div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" value="Tên người dùng" name="name" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Tên người dùng';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="text" value="Email" name="email" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" value="Password" name="password" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Password';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" value="Password" name="password_confirmation" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" value="Số điện thoại" name="phone" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Số điện thoại';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <input type="text" value="Địa chỉ" name="address" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Địa chỉ';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Đăng ký">
                </form>
            </div>

        </div>
    </div>
@endsection

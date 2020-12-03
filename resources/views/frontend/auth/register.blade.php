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
                            <li>Đăng ký</li>
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
                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Đăng ký</h2>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <p>
                                <label>Họ tên <span>*</span></label>
                                <input type="text" name="name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </p>
                            <div class="input-radio">
                                <label>Giới tính</label><br>
                                <span class="custom-radio"><input type="radio" value="1" name="gender"> Nam</span>
                                <span class="custom-radio"><input type="radio" value="0" name="gender"> Nữ</span>
                                @error('gender')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <p>
                                <label>Email<span>*</span></label>
                                <input type="text" name="email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </p>
                            <p>
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </p>
                            <p>
                                <label>Xác nhận mật khẩu <span>*</span></label>
                                <input type="password" name="password_confirmation">
                                @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </p>
                            <div class="login_submit">
                                <button type="submit">Đăng ký</button>
                            </div>

                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
    <!-- customer login end -->
@endsection

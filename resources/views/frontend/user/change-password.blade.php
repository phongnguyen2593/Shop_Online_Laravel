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
                            <li><a href="{{ route('frontend.user.index') }}">Tài khoản</a></li>
                            <li>Đổi mật khẩu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <div class="customer_login mt-60">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Đổi mật khẩu</h2>
                        <form action="{{ route('frontend.user.change-password') }}" method="POST">
                            @csrf
                            <p>
                                <label>Mật khẩu cũ <span>*</span></label>
                                <input type="password" name="old_password">
                                @if (Session::has('error'))
                                    <br><strong class="text-danger">{{ Session('error') }}</strong>
                                @endif
                            </p>
                            <p>
                                <label>Mật khẩu mới <span>*</span></label>
                                <input type="password" name="new_password">
                            </p>
                            <p>
                                <label>Xác nhận mật khẩu mới <span>*</span></label>
                                <input type="password" name="confirm_password">
                                @if (Session::has('danger'))
                                    <br><strong class="text-danger">{{ Session('danger') }}</strong>
                                @endif
                            </p>
                            <div class="login_submit">
                                <button type="submit">Xác nhận</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

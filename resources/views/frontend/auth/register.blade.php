@extends('frontend.layouts.master')

@section('banner')
    <div class="banner-top">
        <div class="container">
            <h3>Đăng ký</h3>
            <h4><a href="{{ route('register') }}">Trang chủ</a><label>/</label>Đăng ký</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile form1">
                <h3>Đăng ký</h3>   
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    
                    <div class="input-group">
                        <label for="#name">Họ tên</label>
                        <input type="text" id="name" class="form-control" name="name">
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="row" style="margin-bottom: 2em">
                        <label for="#gender" class="label-gender">Giới tính</label>
                        <div class="col-lg-3 in-gp-tb">
                            <input type="radio" id="gender" name="gender" value="1"> Nam
                            
                        </div>
                        <div class="col-lg-6 in-gp-tb">
                            <input type="radio" id="gender" name="gender" value="0"> Nữ
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="#email">Email</label>
                        <input type="text" id="email" class="form-control" name="email">
                        <div class="clearfix"></div>
                    </div>
                    <div class="input-group">
                        <label for="#password">Mật khẩu</label>
                        <input type="password" id="password" class="form-control" name="password">
                        <div class="clearfix"></div>
                    </div>
                    <div class="input-group">
                        <label for="#password">Nhập lại mật khẩu</label>
                        <input type="password" id="password" class="form-control" name="password_confirmation">
                        <div class="clearfix"></div>
                    </div>
                    <div class="input-group">
                        <label for="#phone">Số điện thoại</label>
                        <input type="text" id="phone" class="form-control" name="phone">
                        <div class="clearfix"></div>
                    </div>
                    <div class="input-group">
                        <label for="#address">Địa chỉ</label>
                        <input type="text" id="address" class="form-control" name="address">
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Đăng ký">
                </form>
            </div>

        </div>
    </div>
@endsection

@section('css')
    <style>
        label {
            display: block;
            font-family: inherit;
            font-size: 1em !important;
            color: #999; 
            font-weight: 100 !important;
        }

        #name, #email, #password, #phone, #address {
            width: 195%;
        }

        .label-gender {
            padding-left: 15px;
            margin-bottom: 10px;
        }
    </style>
@endsection

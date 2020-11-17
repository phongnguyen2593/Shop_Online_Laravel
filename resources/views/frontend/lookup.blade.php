@extends('frontend.layouts.master')

@section('css')
    <style>
        .search-form {
            background-color: black;
            margin-top: 20px;
        }
    </style>
@endsection

@section('content-top')
    <div class="banner-top">
        <div class="container">
            <h3>Tra cứu đơn hàng</h3>
            <h4><a href="{{ route('frontend.index') }}">Trang chủ</a><label>/</label>Tra cứu đơn hàng</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection

@section('content-mid')
    <div class="container">
        <div class="search-form">
            <form action="{{ route('frontend.lookup') }}" method="GET">
                @csrf
                <input type="text" placeholder="Nhập mã tra cứu ..." name="lookup">
                <input type="submit" value=" ">
            </form>
        </div>
    </div>
@endsection
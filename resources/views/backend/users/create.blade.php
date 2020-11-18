@extends('backend.layouts.master')

@section('css')
    <style>
        label { color: #fff; }
        #name { width: 208%; }
        #email { width: 215%;}
        #avatar { width: 129%; }
        #phone { width: 177%;}
        #address { width: 207%;}
    </style>
@endsection

@section('title')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="fa fa-cube"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2 style="margin-top: 16px">Quản Lý Thành Viên</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="single-product-tab-area mg-b-30">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="fa fa-plus" aria-hidden="true"></i> Thêm thành viên
                                        mới</a></li>
                            </ul>

                            <form action="{{ route('backend.user.store') }}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row mg-b-pro-edt">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group">
                                                        <label for="#name">Họ tên</label>
                                                        <input id="name" type="text" class="form-control"
                                                            name="name" value="{{ old('name') }}">
                                                    </div>
                                                    @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mg-b-pro-edt">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group">
                                                        <label for="#email">Email</label>
                                                        <input id="email" type="text" class="form-control"
                                                            name="email" value="{{ old('email') }}">
                                                    </div>
                                                    @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mg-b-pro-edt">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group">
                                                         <label for="#avatar">Ảnh đại diện</label>
                                                        <input type="file" id="avatar"  class="form-control"
                                                            name="avatar">
                                                    </div>
                                                    @error('avatar')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mg-b-pro-edt">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group">
                                                        <label for="#phone">Số điện thoại</label>
                                                        <input id="phone" type="text" class="form-control"
                                                            name="phone" value="{{ old('phone') }}">
                                                    </div>
                                                    @error('phone')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mg-b-pro-edt">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group">
                                                        <label for="#address">Địa chỉ</label>
                                                        <input id="address" type="text" class="form-control"
                                                            name="address" value="{{ old('address') }}">
                                                    </div>
                                                    @error('address')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit"
                                                        class="btn btn-ctl-bt waves-effect waves-light m-r-10">Tạo mới
                                                    </button>
                                                    <button type="reset" class="btn btn-ctl-bt waves-effect waves-light">Xóa
                                                        dữ liệu
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Quản lý người dùng</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.user.index') }}">Người dùng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa</li>
                    </ol>
                </div>
                <div class="col-sm-3">
                    <div class="btn-group float-sm-right">
                        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i>
                            Setting</button>
                        <button type="button"
                            class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                            data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="javaScript:void();" class="dropdown-item">Action</a>
                            <a href="javaScript:void();" class="dropdown-item">Another action</a>
                            <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Chỉnh sửa người dùng</div>
                            <hr>
                            <form method="POST" action="{{ route('backend.user.update', $user->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Họ tên</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-rounded" id="name"
                                            placeholder="Nhập họ tên người dùng" name="name" value="{{ $user->name }}">
                                        @error('name')
                                            <label for="name" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-rounded" id="email"
                                            placeholder="Nhập địa chỉ email" name="email" value="{{ $user->email }}">
                                        @error('email')
                                            <label for="email" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Giới tính</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" style="border-radius: 30px;">
                                                    <input type="radio" id="male" name="gender" value="1" {{ ($user->gender == 1)? 'checked' : '' }}>&nbsp
                                                    Nam
                                                </div>

                                                <div class="input-group-text"
                                                    style="border-radius: 30px; margin-left: 20px">
                                                    <input type="radio" id="input-addon-radio" name="gender" value="0" {{ ($user->gender == 0)? 'checked' : '' }}>&nbsp
                                                    Nữ
                                                </div>
                                            </div>
                                        </div>
                                        @error('gender')
                                            <label for="gender" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-sm-2 col-form-label">Số điện thoại</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-rounded" id="phone"
                                            placeholder="Nhập số điện thoại" name="phone" value="{{ $user->phone }}">
                                        @error('phone')
                                            <label for="phone" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">Địa chỉ</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-rounded" id="address"
                                            placeholder="Nhập địa chỉ" name="address" value="{{ $user->address }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-white btn-round px-5"><i class="icon-lock"></i>
                                            Chỉnh sửa</button>
                                        <a href="{{ route('backend.user.index') }}">
                                            <button type="button" class="btn btn-white btn-round px-5"><i class="icon-lock"></i>
                                                Hủy bỏ</button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Row-->
            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
@endsection

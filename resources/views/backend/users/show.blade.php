@extends('backend.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">User Profile</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.user.index') }}">Người dùng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumb-->

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                        class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Thông tin
                                            chi tiết</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i
                                            class="icon-note"></i> <span class="hidden-xs">Chỉnh sửa</span></a>
                                </li>
                            </ul>
                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="profile">
                                    <h5 class="mb-3">User Profile</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Họ tên</h6>
                                            <p>
                                                {{ $user->name }}
                                            </p>
                                            <h6>Giới tính</h6>
                                            <p>
                                                {{ ($user->gender==1)? 'Nam' : 'Nữ' }}
                                            </p>
                                            <h6>Email</h6>
                                            <p>
                                                {{ $user->email }}
                                            </p>
                                            <h6>Số diện thoại</h6>
                                            <p>
                                                {{ empty($user->phone) ? '-' : $user->phone }}
                                            </p>
                                            <h6>Địa chỉ</h6>
                                            <p>
                                                {{ empty($user->address) ? '-' : $user->address }}
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Ảnh đại diện</h6>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">codeply</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">angularjs</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">jquery</a>
                                            <a href="javascript:void();" class="badge badge-dark badge-pill">bootstrap</a>
                                            <a href="javascript:void();"
                                                class="badge badge-dark badge-pill">responsive-design</a>
                                            <hr>
                                            <span class="badge badge-primary"><i class="fa fa-user"></i> 900
                                                Followers</span>
                                            <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                                            <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                                <div class="tab-pane" id="edit">
                                    <form method="POST" action="{{ route('backend.user.update', $user->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Họ tên</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="name"
                                                    value="{{ $user->name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="email" name="email"
                                                    value="{{ $user->email }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Giới tính</label>
                                            <div class="col-lg-9">
                                                <div class="form-group row">
                                                    <div class="col-sm-3">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <input type="radio" name="gender" value="1"
                                                                        {{ $user->gender == 1 ? 'checked' : '' }}>&nbsp Nam
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <input type="radio" name="gender" value="0"
                                                                        {{ $user->gender == 0 ? 'checked' : '' }}> &nbsp Nữ
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Số điện thoại</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="phone"
                                                    value="{{ $user->phone }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Địa chỉ</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="address"
                                                    value="{{ $user->address }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" value="" placeholder="Street">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label"></label>
                                            <div class="col-lg-9">
                                                <input type="submit" class="btn btn-primary" value="Lưu">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
@endsection

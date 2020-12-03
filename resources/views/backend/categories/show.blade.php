@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Thông tin danh mục</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.category.index') }}">Danh mục</a></li>
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
                                        class="nav-link active"><i class="icon-list"></i> <span class="hidden-xs">Thông tin
                                            chi tiết</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i
                                            class="icon-note"></i> <span class="hidden-xs">Chỉnh sửa</span></a>
                                </li>
                            </ul>
                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="profile">
                                    <h5 class="mb-3">Chi tiết danh mục</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Tên danh mục</h6>
                                            <p>
                                                {{ $category->name }}
                                            </p>
                                            <h6>Danh mục cha</h6>
                                            <p>
                                                {{ $category->parent_id == 0 ? '-' : $category->parent->name }}
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Ảnh hiển thị</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="edit">
                                    <form method="POST" action="{{ route('backend.category.update', $category->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Tên danh mục</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="name"
                                                    value="{{ $category->name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="basic-select" class="col-sm-3 col-form-label">Danh mục cha</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="basic-select" name="category_id">
                                                    @foreach ($allCategories as $value)
                                                        <option value="{{ $value->id }}"
                                                            {{ $category->parent_id == $value->id ? 'selected' : '' }}>
                                                            {{ $value->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Ảnh hiển thị</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="file" name="thumbnail">
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

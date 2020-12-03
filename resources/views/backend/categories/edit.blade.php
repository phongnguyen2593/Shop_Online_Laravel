@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Quản lý danh mục</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.category.index') }}">Danh mục</a></li>
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
                            <div class="card-title">Chỉnh sửa danh mục</div>
                            <hr>
                            <form method="POST" action="{{ route('backend.category.update', $category->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Tên danh mục</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-rounded" id="name"
                                            placeholder="Nhập họ tên người dùng" name="name" value="{{ $category->name }}">
                                        @error('name')
                                            <label for="name" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="basic-select" class="col-sm-2 col-form-label">Danh mục cha</label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-rounded" id="basic-select"
                                            name="category_id">
                                            <option value="0">-- Chọn danh mục cha --</option>
                                            @foreach ($allCategories as $value)
                                                <option value="{{ $value->id }}" {{ ($category->parent_id==$value->id)? 'selected':'' }}>
                                                    {{ $value->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label form-control-label">Ảnh hiển thị</label>
                                    <div class="col-lg-10">
                                        <input class="form-control form-control-rounded" type="file" name="thumbnail">
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

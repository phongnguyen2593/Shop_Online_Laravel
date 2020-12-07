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
                        <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
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
                            <div class="card-title">Thêm mới danh mục</div>
                            <hr>
                            <form method="POST" action="{{ route('backend.category.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="category_name" class="col-sm-2 col-form-label">Tên danh mục</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-rounded" id="category_name"
                                            placeholder="Nhập tên danh mục" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <label for="name" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="category_parent_id" class="col-sm-2 col-form-label">Danh mục cha</label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-rounded" id="category_parent_id"
                                            name="parent_id">
                                            <option value="0">-- Chọn danh mục cha --</option>
                                            @foreach ($allCategories as $value)
                                                <option value="{{ $value->id }}"
                                                    {{ old('parent_id') == $value->id ? 'selected' : '' }}>
                                                    {{ $value->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="category_thumbnail" class="col-sm-2 col-form-label">Hình ảnh hiển
                                        thị</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3" id="thumbnail">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="category_thumbnail"
                                                    name="thumbnail">
                                                <label class="custom-file-label" for="category_thumbnail">Chọn ảnh</label>
                                            </div>
                                        </div>
                                        @error('thumbnail')
                                            <label for="thumbnail" class="error">&nbsp {{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-white btn-round px-5"><i class="icon-lock"></i>
                                            Thêm mới</button>
                                        <button type="reset" class="btn btn-white btn-round px-5"><i class="icon-lock"></i>
                                            Xóa dữ liệu</button>
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

@section('script')
    <script>
        function previewThumbnail(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                // console.log('input.files');
                reader.onload = function(event){
                    $('#thumbnail + img').remove();
                    $('#thumbnail').after('<img src="'+ event.target.result +'" alt="" height="200px">');
                };
                reader.readAsDataURL(input.files[0]);
            };
        }

        $('#category_thumbnail').change(function (){
            previewThumbnail(this);
        });
    </script>
@endsection

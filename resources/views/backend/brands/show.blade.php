@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Thông tin thương hiệu</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.brand.index') }}">Thương hiệu</a></li>
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
                            </ul>
                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="profile" >
                                    <form method="POST" action="{{ route('backend.brand.update', $brand->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Tên thương hiệu</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="name"
                                                    value="{{ $brand->name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Ảnh hiển thị</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="file" name="thumbnail" id="brand_thumbnail">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <img src="{{ asset($brand->thumbnail) }}" alt="" width="100%" id="img">
                                                    </div>
                                                </div>
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

@section('script')
    <script>
        function previewThumbnail(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#img').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            };
        }
        $('#brand_thumbnail').change(function() {
            previewThumbnail(this);
        });
    </script>
@endsection

@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Quản lý Slide</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.slide.index') }}">Slide</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumb-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Thêm mới Slide</div>
                            <hr>
                            <form method="POST" action="{{ route('backend.slide.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="brand_thumbnail" class="col-sm-2 col-form-label">Hình ảnh slide</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3" id="thumbnail">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="brand_thumbnail"
                                                    name="thumbnail">
                                                <label class="custom-file-label" for="brand_thumbnail">Chọn ảnh</label>
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

        $('#brand_thumbnail').change(function (){
            previewThumbnail(this);
        });
    </script>
@endsection

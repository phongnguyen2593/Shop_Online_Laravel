@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Thông tin đơn hàng</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.order.index') }}">Đơn hàng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumb-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thông tin khách hàng</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th colspan="2">Họ tên</th>
                                            <td>{{ $order->customer->name }}</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Số điện thoại</th>
                                            <td>{{ $order->customer->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Địa chỉ</th>
                                            <td>{{ $order->customer->address }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Chi tiết hóa đơn</h5>
                            <p>Mã đơn hàng: {{ $order->code }}</p>
                            <p>Trạng thái:
                                @if ($order->status == 1)
                                    <span class="text-warning">Chờ xác nhận</span>
                                @elseif($order->status == 0)
                                    <span class="text-danger">Đã hủy</span>
                                @elseif($order->status == 2)
                                    <span class="text-primary">Đã xác nhận</span>
                                @elseif($order->status == 3)
                                    <span class="text-primary">Đã hoàn thành</span>
                                @endif
                            </p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        @php
                                        $i = 1
                                        @endphp
                                        @foreach ($order->products as $item)
                                            <tr>
                                                <th scope="row">{{ $i }}</th>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->pivot->quantity }}</td>
                                                <td>{{ number_format($item->pivot->sale_price) }} đ</td>
                                                <td>{{ number_format($item->pivot->sale_price * $item->pivot->quantity) }} đ
                                                </td>
                                            </tr>
                                            @php
                                            $i++
                                            @endphp
                                        @endforeach
                                        <tr>
                                            <th colspan="2" class="text-center">Tổng tiền</th>
                                            <th colspan="3" class="text-center">{{ number_format($total) }} đ</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('backend.order.update', $order->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <select class="form-control" id="basic-select" name="status">
                                            <option {{ ($order->status == 1)? 'selected':'' }} value="2">Xác nhận đơn hàng</option>
                                            <option {{ ($order->status == 2)? 'selected':'' }} value="3">Đã giao xong</option>
                                            <option value="0">Hủy đơn hàng</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn btn-white btn-square waves-effect waves-light m-1" style="padding: 6px 19px;">Cập nhật</button>
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
    <!--End content-wrapper-->
@endsection

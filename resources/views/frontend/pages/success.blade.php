@extends('frontend.layouts.master')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('frontend.index') }}">Trang chủ</a></li>
                            <li>Thông báo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!--Checkout page section-->
    <div class="Checkout_section mt-20">
        <div class="container">
            @if (Session::has('susscess'))
                <div class="row">
                    <div class="col-12">
                        <div class="user-actions">
                            <h3>
                                {{ Session::get('susscess') }}
                            </h3>
                        </div>
                    </div>
                </div>
            @endif
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3>Thông tin giao nhận</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Họ tên người nhận:</td>
                                        <td>{{ $order->customer->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>{{ $order->customer->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Số điện thoại:</td>
                                        <td>{{ $order->customer->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ:</td>
                                        <td>{{ $order->customer->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ghi chú:</td>
                                        <td>{{ $order->note }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="order_table table-responsive">
                            <h3>Mã đơn hàng: <span>{{ $order->code }}</span></h3>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order_product as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->pivot->quantity }}</td>
                                            <td>{{ number_format($item->pivot->sale_price) }} đ</td>
                                            <td>{{ number_format($item->pivot->quantity * $item->pivot->sale_price) }} đ
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">Tổng tiền</th>
                                        <td colspan="2"><strong>{{ $total }} đ</strong></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Trạng thái</th>
                                        @if ($order->status == 1)
                                            <td colspan="2" class="text-warning">Chờ xác nhận</td>
                                        @elseif($order->status==2)
                                            <td colspan="2" class="text-primary">Đã xác nhận</td>
                                        @elseif($order->status==3)
                                            <td colspan="2" class="text-success">Đã hoàn thành</td>
                                        @elseif($order->status==0)
                                            <td colspan="2" class="text-danger">Đã hủy</td>
                                        @endif
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Checkout page section end-->
@endsection

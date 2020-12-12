@extends('frontend.layouts.master')

@section('content')
    <!--Checkout page section-->
    <div class="Checkout_section mt-60">
        <div class="container">
            @guest
                <div class="row">
                    <div class="col-12">
                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                Đã có tài khoản ?
                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_login"
                                    aria-expanded="true">Click vào đây để đăng nhập</a>

                            </h3>
                            <div id="checkout_login" class="collapse" data-parent="#accordion">
                                <div class="checkout_info">
                                    <form action="#">
                                        <div class="form_group">
                                            <label>Username or email <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group">
                                            <label>Password <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group group_3 ">
                                            <button type="submit">Login</button>
                                            <label for="remember_box">
                                                <input id="remember_box" type="checkbox">
                                                <span> Remember me </span>
                                            </label>
                                        </div>
                                        <a href="#">Lost your password?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endguest
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="{{ route('frontend.order.store') }}" method="POST">
                            @csrf
                            <h3>Thông tin khách hàng</h3>
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <div class="row">
                                        @if (Auth::user() != null)
                                            <div class="panel-default col-2">
                                                <input id="male" name="gender" type="radio" value="1"
                                                    {{ Auth::user()->info->gender == 1 ? 'checked' : '' }}>
                                                <label for="male">Anh</label>
                                            </div>
                                            <div class="panel-default col-2">
                                                <input id="female" name="gender" type="radio" value="0"
                                                    {{ Auth::user()->info->gender == 0 ? 'checked' : '' }}>
                                                <label for="female">Chị</label>
                                            </div>
                                        @else
                                            <div class="panel-default col-2">
                                                <input id="male" name="gender" type="radio" value="1">
                                                <label for="male">Anh</label>
                                            </div>
                                            <div class="panel-default col-2">
                                                <input id="female" name="gender" type="radio" value="0">
                                                <label for="female">Chị</label>
                                            </div>
                                        @endif
                                    </div>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Họ tên <span>*</span></label>
                                    <input type="text" name="name"
                                        value="{{ Auth::user() != null ? Auth::user()->info->name : '' }}"
                                        placeholder="Nhập họ tên">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Email</label>
                                    <input type="text" name="email"
                                        value="{{ Auth::user() != null ? Auth::user()->email : '' }}"
                                        placeholder="Nhập email">
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Địa chỉ <span>*</span></label>
                                    <input placeholder="Nhập địa chỉ giao hàng" type="text" name="address"
                                        value="{{ Auth::user() != null ? Auth::user()->info->address : '' }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Số điện thoại<span>*</span></label>
                                    <input type="text" placeholder="Nhập số điện thoại" name="phone"
                                        value="{{ Auth::user() != null ? Auth::user()->info->phone : '' }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-20">
                                    <div class="order-notes">
                                        <label for="order_note">Ghi chú</label>
                                        <textarea style="line-height: 150%;height: 80px;" name="note"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <div class="order_button">
                                        <button type="submit">Đặt hàng</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Your order</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ number_format($item->price * $item->qty) }} đ</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tạm tính</th>
                                        <td colspan="2">{{ Cart::instance('shopping')->total() }} đ</td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Tổng tiền</th>
                                        <td colspan="2"><strong>{{ Cart::instance('shopping')->total() }} đ</strong></td>
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

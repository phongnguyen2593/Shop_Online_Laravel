@extends('frontend.layouts.master')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="route('frontend.index')">Trang chủ</a></li>
                            <li>Tài khoản</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- my account start  -->
    <section class="main_content_area">
        <div class="container">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#account-details" data-toggle="tab" class="nav-link active">Thông tin tài
                                        khoản</a></li>
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">Đơn hàng</a></li>
                                <li><a href="{{ route('frontend.user.wishlist') }}" class="nav-link">Yêu thích</a></li>
                                <li><a href="{{ route('frontend.user.password') }}" class="nav-link">Đổi mật khẩu</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" class="nav-link"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                        xuất</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade" id="orders">
                                <h3>Đơn hàng</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Mã đơn hàng</th>
                                                <th>Thời gian tạo</th>
                                                <th>Trạng thái</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Auth::user()->orders as $item)
                                            <tr>
                                                <td>{{ $item->order->code }}</td>
                                                <td>{{  date_format($item->order->created_at, 'g:ia \o\n jS F Y')}}</td>
                                                <td>
                                                    @if ($item->order->status == 1)
                                                    <span class="text-warning">Chờ xác nhận</span>
                                                    @elseif ($item->order->status == 2)
                                                    <span class="text-primary">Đã xác nhận - Đang giao</span>
                                                    @elseif ($item->order->status == 3)
                                                    <span class="text-success">Đã giao xong</span>
                                                    @elseif ($item->order->status == 0)
                                                    <span class="text-danger">Đã hủy</span>
                                                    @endif
                                                </td>
                                                <td><a href="cart.html" class="view">Chi tiết</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="account-details">
                                <h3>Thông tin tài khoản </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="{{ route('frontend.user.update') }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <label>Giới tính</label>
                                                <div class="input-radio">
                                                    <span class="custom-radio"><input type="radio" value="1" name="gender"
                                                        {{ Auth::user()->info->gender == 1 ? 'checked' : '' }}>
                                                        Nam</span>
                                                    <span class="custom-radio"><input type="radio" value="0" name="gender"
                                                        {{ Auth::user()->info->gender == 0 ? 'checked' : '' }}>
                                                        Nữ</span>
                                                </div>
                                                @error('gender')
                                                    <span class="text-danger">{{ $message }}</span><br>
                                                @enderror
                                                <br>
                                                <label>Họ tên</label>
                                                <input type="text" name="name" value="{{ Auth::user()->info->name }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span><br>
                                                @enderror
                                                <label>Email</label>
                                                <input type="text" name="email" value="{{ Auth::user()->email }}" disabled>
                                                <label>Địa chỉ</label>
                                                <input type="text" name="address" value="{{ Auth::user()->info->address }}">
                                                <label>Số điện thoại</label>
                                                <input type="text" name="phone" value="{{ Auth::user()->info->phone }}">
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                                <div class="save_button primary_btn default_button">
                                                    <button type="submit">Lưu</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account end   -->
@endsection

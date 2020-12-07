<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img src="/backend/dashboard/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">The Big Store</h5>
        </a>
    </div>
    <div class="user-details">
        <div class="media align-items-center user-pointer collapsed" data-toggle="collapse"
            data-target="#user-dropdown">
            <div class="avatar"><img class="mr-3 side-user-img" src="https://via.placeholder.com/110x110"
                    alt="user avatar"></div>
            <div class="media-body">
                <h6 class="side-user-name">{{ Auth::user()->name }}</h6>
            </div>
        </div>
        <div id="user-dropdown" class="collapse">
            <ul class="user-setting-menu">
                <li><a href=""><i class="icon-user"></i> Thông tin</a></li>
                <li><a href="javaScript:void();"><i class="icon-settings"></i> Cài đặt</a></li>
                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="icon-power"></i> Đăng xuất</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
    <ul class="sidebar-menu">
        <li class="active">
            <a href="{{ route('backend.index') }}" class="waves-effect">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Thống kê</span>
            </a>
        </li>
        <li class="sidebar-header">QUẢN LÝ NGƯỜI DÙNG</li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-layers"></i>
                <span>Người Dùng</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ route('backend.user.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Danh sách</a></li>
                <li><a href="{{ route('backend.user.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Tạo mới</a></li>
                <li><a href=""><i class="zmdi zmdi-dot-circle-alt"></i> Đã khóa</a></li>
            </ul>
        </li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-calendar-check"></i> <span>Phân Quyền</span>
            </a>
        </li>
        <li class="sidebar-header">QUẢN LÝ SẢN PHẨM</li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-card-travel"></i>
                <span>Danh Mục</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ route('backend.category.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Danh Sách</a></li>
                <li><a href="{{ route('backend.category.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Thêm mới</a></li>
                @if (Auth::user()->role->role==1)
                <li><a href="{{ route('backend.category.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Đã xóa</a></li>
                @endif
            </ul>
        </li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-chart"></i> <span>Sản Phẩm</span>
                <i class="fa fa-angle-left float-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ route('backend.product.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Danh Sách</a></li>
                <li><a href="{{ route('backend.product.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Thêm Mới</a></li>
                @if (Auth::user()->role->role==1)
                <li><a href="{{ route('backend.product.trash') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Đã xóa</a></li>   
                @endif
            </ul>
        </li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-chart"></i> <span>Thương Hiệu</span>
                <i class="fa fa-angle-left float-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ route('backend.brand.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Danh Sách</a></li>
                <li><a href="{{ route('backend.brand.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Thêm Mới</a></li>
            </ul>
        </li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-widgets"></i> <span>Đơn Hàng</span>
                <i class="fa fa-angle-left float-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ route('backend.order.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Danh Sách</a>
                </li>
                <li><a href="{{ route('backend.order.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Tạo mới</a></li>
                <li><a href="{{ route('backend.order.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Chờ Xác Nhận</a></li>
                <li><a href="{{ route('backend.order.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Đang Giao</a></li>
                <li><a href="{{ route('backend.order.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Hoàn Thành</a></li>
                <li><a href="{{ route('backend.order.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Đã Hủy</a></li>
            </ul>
        </li>
        <li class="sidebar-header">QUẢN LÝ BÀI VIẾT</li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>Bình Luận</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="form-inputs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Danh Sách</a></li>
                <li><a href="form-input-group.html"><i class="zmdi zmdi-dot-circle-alt"></i> Chờ Duyệt</a>
                </li>
                <li><a href="form-layouts.html"><i class="zmdi zmdi-dot-circle-alt"></i> ...</a></li>
            </ul>
        </li>
        <li class="sidebar-header">QUẢN LÝ HÌNH ẢNH</li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-lock"></i> <span>Slider</span>
                <i class="zmdi zmdi-lock"></i> <span>Banner</span>
            </a>
        </li>
    </ul>
</div>

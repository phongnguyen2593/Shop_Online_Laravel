<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="/backend/dashboard/img/logo/logo.png" alt="" /></a>
            <strong><img src="/backend/dashboard/img/logo/logosn.png" alt="" /></strong>
        </div>
        <div class="nalika-profile" style="padding-bottom: 0;">
            <div class="profile-dtl">
                <a href="#"><img src="/backend/dashboard/img/notification/4.jpg" alt="" /></a>
                <h2>{{ Auth::user()->name }}</h2>
                @if (Auth::user()->role == 1)
                    <span>Administrator</span>
                @elseif (Auth::user()->role == 2)
                    <span>Moderator</span>
                @else
                    <span>User</span>
                @endif
            </div>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a  href="{{ route('backend.index') }}">
                            <i class="fa fa-home fa-fw fa-lg"></i>
                            <span class="mini-click-non">Trang chủ</span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i
                                class="fa fa-user fa-fw fa-lg"></i> <span
                                class="mini-click-non">Quản lý user</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="User list" href="google-map.html"><span class="mini-sub-pro">Danh sách</span></a></li>
                            <li><a title="Create User" href="data-maps.html"><span class="mini-sub-pro">Thêm mới</span></a></li>
                            <li><a title="
                                Waiting for Approval" href="pdf-viewer.html"><span class="mini-sub-pro">Chờ phê duyệt</span></a></li>
                            <li><a title="Deactive User" href="x-editable.html"><span
                                        class="mini-sub-pro">Đã khóa</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i
                                class="fa fa-list fa-fw fa-lg"></i> <span
                                class="mini-click-non">Quản lý danh mục</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Category List" href="file-manager.html"><span class="mini-sub-pro">Danh sách</span></a></li>
                            <li><a title="Create Category" href="blog.html"><span class="mini-sub-pro">Thêm mới</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i
                                class="fa fa-cube fa-fw fa-lg"></i> <span
                                class="mini-click-non">Quản lý sản phẩm</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Product List" href="{{ route('backend.product.index') }}"><span class="mini-sub-pro">Danh sách</span></a></li>
                            <li><a title="Create Product" href=""><span class="mini-sub-pro">Thêm mới</span></a></li>
                            <li><a title="Deactive Product" href=""><span class="mini-sub-pro">Đã khóa</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i
                                class="fa fa-comment fa-fw fa-lg"></i> <span class="mini-click-non">Bình luận</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a href=""><span class="mini-sub-pro">Danh sách</span></a></li>
                            <li><a href=""><span class="mini-sub-pro">Chờ phê duyệt</span></a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">@csrf<span
                                class="fa fa-sign-out fa-fw fa-lg"></span>
                            Đăng xuất</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>



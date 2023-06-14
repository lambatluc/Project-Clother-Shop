 <!--=========================*
             Side Bar Menu
    *===========================-->
    <div class="sidebar_menu" >
        <div class="menu-inner">
            <div id="sidebar-menu">
                <!--=========================*
                           Main Menu
                *===========================-->
                <ul class="metismenu" id="sidebar_menu">
                    <li>
                        <a href="{{route('admin.home')}}">
                            <i class="fas fa-home"></i>
                            <span>Trang Chủ</span>
                        </a>
                    </li>
                    <li class="menu-title">Chức Năng</li>
                    <!-- order -->
                
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                        <i class="fas fa-shopping-cart"></i>
                            <span>Quản Lí Đơn hàng</span>
                            <span class="float-right arrow"><i class="fas fa-chevron-circle-down"></i></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{route('admin.morder')}}"><i class="ion-ios-folder-outline"></i><span>Đơn chờ xác thực</span></a></li>
                            <li><a href="inbox.html"><i class="ion-ios-folder-outline"></i><span>Đơn đã giao thành công</span></a></li>
                          
                        </ul>
                    </li>
                    <!--=========================*
                              Quản lí nhân viên
                    *===========================-->
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fas fa-users"></i>
                            <span>Quản Lí Nhân Viên</span>
                            <span class="float-right arrow"><i class="fas fa-chevron-circle-down"></i></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="inbox.html"><i class="ion-ios-folder-outline"></i><span>Inbox</span></a></li>
                            <li><a href="compose.html"><i class="ti-pencil-alt"></i><span>Compose Email</span></a></li>
                            <li><a href="read-mail.html"><i class="ti-bookmark-alt"></i><span>Read Email</span></a></li>
                        </ul>
                    </li>
                    <!--=========================*
                              Quản lí đăng bài 
                    *===========================-->
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fas fa-globe"></i>
                            <span> Các Hoạt Động Của Web</span>
                            <span class="float-right arrow"><i class="fas fa-chevron-circle-down"></i></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="inbox.html"><i class="ion-ios-folder-outline"></i><span>Inbox</span></a></li>
                            <li><a id="load" href="{{route('admin.coupon.show')}}"><i class="ti-pencil-alt"></i><span>Mã giảm giá</span></a></li>
                            <li><a href="read-mail.html"><i class="ti-bookmark-alt"></i><span>Read Email</span></a></li>
                        </ul>
                    </li>
                 
                    <!--=========================*
                              Quản lí web hàng
                    *===========================-->
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fas fa-briefcase"></i>
                            <span>Quản Lí web AND Store</span>
                            <span class="float-right arrow"><i class="fas fa-chevron-circle-down "></i></span>
                        </a>
                        <ul class="submenu">
                            <li><a id = "load" href="{{route('admin.category.show')}}"><span>Phần Danh Mục</span></a></li>
                            <li><a id = "load" href="{{route('admin.product.show')}}"><span>Phần Sản Phẩm</span></a></li>
                            <li><a id = "load" href="{{route('admin.slide.show')}}"><span>Phần Slide</span></a></li>
                
                        </ul>
                    </li>
               
                <!--=========================*
                          End Main Menu
                *===========================-->
            </div>
        </div>
    </div>
    <!--=========================*
           End Side Bar Menu
    *===========================-->

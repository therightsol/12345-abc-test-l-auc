    <div id="menubar" class="menubar-inverse ">
        <div class="menubar-fixed-panel">
            <div>
                <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="expanded">
                <a href="#">
                    <span class="text-lg text-bold text-primary ">PakAuction</span>
                </a>
            </div>
        </div>
        <div class="menubar-scroll-panel">

            <!-- BEGIN MAIN MENU -->
            <ul id="main-menu" class="gui-controls">

                <!-- BEGIN DASHBOARD -->
                <li>
                    <a href="#" class="" >
                        <div class="gui-icon"><i class="md md-home"></i></div>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="" >
                        <div class="gui-icon"><i class="fa fa-sign-in"></i></div>
                        <span class="title">login</span>
                    </a>
                </li><!--end /menu-li -->
                <li>
                    <a href="" >
                        <div class="gui-icon"><i class="fa fa-sign-out "></i></div>
                        <span class="title">Logout</span>
                    </a>
                </li><!--end /menu-li -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="fa fa-user fa-fw"></i></div>
                        <span class="title">Manage Users</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href=""><span class="title">View Users</span></a></li>
                        <li><a href=""><span class="title">Add User</span></a></li>
                    </ul><!--end /submenu -->
                </li>
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="fa fa-user fa-fw"></i></div>
                        <span class="title">Car</span>
                    </a>
                    <!--start submenu -->
                    <ul>
{{--                        <li><a class="{{ Helper::isActiveResource('admin.cars') }}"  href="{{ route('admin.cars.index') }}"><span class="title">Manage Cars</span></a></li>--}}
                        <li><a class="{{ Helper::isActiveResource('admin.category') }}" href="{{ route('admin.category.index') }}"><span class="title">Manage Category</span></a></li>
                        <li><a class="{{ Helper::isActiveResource('admin.carCompany') }}" href="{{ route('admin.carCompany.index') }}"><span class="title">Manage Car Companies</span></a></li>
                        <li><a class="{{ Helper::isActiveResource('admin.carModel') }}" href="{{ route('admin.carModel.index') }}"><span class="title">Manage Car Modal</span></a></li>
                    </ul><!--end /submenu -->
                </li>


                <!-- BEGIN LEVELS -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="fa fa-folder-open fa-fw"></i></div>
                        <span class="title">Menu levels demo</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="#"><span class="title">Item 1</span></a></li>
                        <li><a href="#"><span class="title">Item 1</span></a></li>
                        <li class="gui-folder">
                            <a href="javascript:void(0);">
                                <span class="title">Open level 2</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href="#"><span class="title">Item 2</span></a></li>
                                <li class="gui-folder">
                                    <a href="javascript:void(0);">
                                        <span class="title">Open level 3</span>
                                    </a>
                                    <!--start submenu -->
                                    <ul>
                                        <li><a href="#"><span class="title">Item 3</span></a></li>
                                        <li><a href="#"><span class="title">Item 3</span></a></li>
                                        <li class="gui-folder">
                                            <a href="javascript:void(0);">
                                                <span class="title">Open level 4</span>
                                            </a>
                                            <!--start submenu -->
                                            <ul>
                                                <li><a href="#"><span class="title">Item 4</span></a></li>
                                                <li class="gui-folder">
                                                    <a href="javascript:void(0);">
                                                        <span class="title">Open level 5</span>
                                                    </a>
                                                    <!--start submenu -->
                                                    <ul>
                                                        <li><a href="#"><span class="title">Item 5</span></a></li>
                                                        <li><a href="#"><span class="title">Item 5</span></a></li>
                                                    </ul><!--end /submenu -->
                                                </li><!--end /submenu-li -->
                                            </ul><!--end /submenu -->
                                        </li><!--end /submenu-li -->
                                    </ul><!--end /submenu -->
                                </li><!--end /submenu-li -->
                            </ul><!--end /submenu -->
                        </li><!--end /submenu-li -->
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END LEVELS -->

            </ul><!--end .main-menu -->
            <!-- END MAIN MENU -->

            <div class="menubar-foot-panel">
                <small class="no-linebreak hidden-folded">
                    <span class="opacity-75">Copyright &copy; {{date('Y')}} </span> <strong>PakAuction</strong>
                </small>
            </div>
        </div><!--end .menubar-scroll-panel-->
    </div>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link">首页</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">文章</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" role="button">
                <form action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-block btn-xs" type="submit" name="button">
                        <i class="fas fa-power-off"></i>
                    </button>
                </form>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-indigo">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">RGB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{ active_class(if_route(['home']), 'menu-open') }}">
                    <a href="#" class="nav-link {{ active_class(if_route('home')) }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>统计<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ active_class(if_route('home')) }}">
                                <i class="far fa-home nav-icon"></i>
                                <p>首页</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ active_class(if_route(['userList']), 'menu-open') }}">
                    <a href="#" class="nav-link {{ active_class(if_route('userList')) }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>用户管理<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('userList') }}" class="nav-link {{ active_class(if_route('userList')) }}">
                                <i class="far fa-address-book nav-icon"></i>
                                <p>用户列表</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

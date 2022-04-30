<style>
.main-drop-bg{
    background: #334e54;
}
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('dist/img/photo1.png') }}" alt="{{ config('app.name') }} Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">{{ config('app.name') }}.net</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user3-128x128.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a><!-- from auth() -->
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @role('superadministrator')
            <li class="nav-item"><!--DASHBOARD-->
                <a href="{{ route('admin-dashboard') }}" class="main-drop-bg nav-link {{ request()->is('admin-dashboard') ? 'active':'' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Dashboard</p>
                </a>
            </li><!-- offices -->
            @endrole
            @role('superadministrator')
            <li class="nav-item">
                <a href="{{ route('item.index') }}" class="main-drop-bg nav-link {{ request()->is('item*') ? 'active':'' }}">
                    <i class="nav-icon fa fa-building"></i>
                    <p>Items</p>
                </a>
            </li><!-- resources -->
            @endrole
            @role('superadministrator')
            <li class="nav-item">
                <a href="" class="main-drop-bg nav-link {{ request()->is('admin-bookings*') ? 'active':'' }}">
                    <i class="nav-icon fa fa-book"></i>
                    <p>Orders</p>
                </a>
            </li><!-- resources -->
            @endrole
            @role('superadministrator')
            <li class="nav-item {{ request()->is('admin-units*') || request()->is('admin-vessels*') || request()->is('admin-batches*') ? 'menu-open':'' }}">
                <a href="#" class="main-drop-bg nav-link {{ request()->is('admin-vessels*') || request()->is('admin-batches*') || request()->is('admin-units*') ? 'active':'' }}">
                    <i class="fa fa-flag nav-icon"></i>
                    <p>Settings<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="" class="nav-link {{ request()->is('admin-units*') ? 'active':'' }}">
                            <i class="fa fa-cube nav-icon"></i>
                            <p>Item Types</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link {{ request()->is('admin-vessels*') ? 'active':'' }}">
                            <i class="fa fa-ship nav-icon"></i>
                            <p>Vessels</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link {{ request()->is('admin-batches*') ? 'active':'' }}">
                            <i class="fa fa-cubes nav-icon"></i></i>
                            <p>Batches</p>
                        </a>
                    </li>
                </ul>
            </li><!-- trackings -->
            @endrole
            @role('superadministrator')
            <li class="nav-item">
                <a href="#" class="main-drop-bg nav-link">
                    <i class="nav-icon fa fa-angle-double-left"></i>
                    <p>FeedBack<span class="right badge badge-success">New</span></p>
                </a>
            </li>
            @endrole
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
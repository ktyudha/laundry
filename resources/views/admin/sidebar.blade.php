<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image my-auto">
            <img src="{{ asset('assets/images/admin.ico') }}" class="brand-image img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a class="d-block text-capitalize font-weight-bold">{{ Auth::user()->name }}</a>
            <a class="d-block text-lowercase">{{ Auth::user()->email }}</a>
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
    <nav class="mt-2">
        <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p class="text-capitalize">dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-address-book"></i>
                    <p>Order</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-globe"></i>
                    <p>
                        Posts
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="?page=add carousel" class="nav-link">
                            <i class="nav-icon fas fa-sliders-h"></i>
                            <p class="text-capitalize">carousel</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('promo.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-tags"></i>
                            <p class="text-capitalize">promo</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link text-danger"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p name="signout"><b>
                            Sign out</b>
                    </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->

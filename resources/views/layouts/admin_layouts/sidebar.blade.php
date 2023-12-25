<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Instant CV</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            @can('profile-list')
            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>My CV Profiles</span></a>
            </li>
            @endcan

            @can('role-list')
            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('roles.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Roles</span></a>
            </li>
            @endcan

            @can('user-list')
            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Users</span></a>
            </li>
            @endcan

            <!-- Divider -->
            <hr class="sidebar-divider">

            @guest
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Login</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('register') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Register</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            @endguest


            {{-- <li class="nav-item active">
                <a class="nav-link" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Logout</span></a>
            </li> --}}

            {{-- <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block"> --}}

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

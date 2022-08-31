<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-black sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        {{-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> --}}
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fab fa-autoprefixer"></i>
            </div>
            <div class="sidebar-brand-text mb-3"><img src="{{ asset('img/logo.png') }} " alt="logo"
                    style="width:75px;">
            </div>
        </a>

        <ul class="nav flex-column">
            <li class="nav-item ">
                <a class="nav-link text-white{{ Request::is('dashboard') ? 'active' : '' }} " aria-current="page"
                    href="/dashboard">
                    <span data-feather="home" class="align-text-bottom text-white "></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white{{ Request::is('dashboard/posts*') ? 'active' : '' }} "
                    href="/dashboard/posts">
                    <span data-feather="file-text" class="align-text-bottom text-white"></span>
                    Postingan
                </a>
            </li>
        </ul>
        @can('super_admin')
            <h6 class="sidebar-heading d-flex justifiy-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administrator</span>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link text-white{{ Request::is('dashboard/categories*') ? 'active' : '' }} "
                        href="/dashboard/categories">
                        <span data-feather="grid" class="align-text-bottom text-white"></span>
                        Kategori
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white{{ Request::is('dashboard/admin*') ? 'active' : '' }} "
                        href="/dashboard/admin">
                        <span data-feather="users" class="align-text-bottom text-white"></span>
                        Admin
                    </a>
                </li>
                {{-- <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }} " href="/dashboard/users">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Users
          </a>
        </li> --}}
            </ul>
        @endcan


    </div>
</nav>

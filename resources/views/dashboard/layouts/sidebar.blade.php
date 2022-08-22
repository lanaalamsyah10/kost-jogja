<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-black sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        {{-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> --}}
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fab fa-autoprefixer"></i>
            </div>
            <div class="sidebar-brand-text mb-3"><img src="{{ asset('img/lg.png') }} " alt="logo" style="width:75px;">
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
                    My Post
                </a>
            </li>
        </ul>

        @can('admin')
            <h6 class="sidebar-heading d-flex justifiy-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administrator</span>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link text-white{{ Request::is('dashboard/categories*') ? 'active' : '' }} "
                        href="/dashboard/categories">
                        <span data-feather="grid" class="align-text-bottom text-white"></span>
                        Categories
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

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">

                <i class="fas fa-fw fa-folder"></i>

                <span>Data Master</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <h6 class="collapse-header">Master Screens:</h6>
                    {{-- @if (Auth::user()->is_admin == '2')
                        <a class="collapse-item" href="{{ route('MstAdmin.index') }}">{{ __('admin') }}</a>
                    @endif
                    @if (Auth::user()->is_admin == '1')
                        <a class="collapse-item" href="{{ route('MstKaryawan.index') }}">{{ __('Karyawan') }}</a>
                        <a class="collapse-item" href="{{ route('MstJabatan.index') }}">{{ __('Jabatan') }}</a>
                        <a class="collapse-item" href="{{ route('MstLokasi.index') }}">{{ __('Lokasi') }}</a>
                    @endif --}}
                    {{-- <a class="collapse-item" href="{{ route('mst-potongan.index') }}">{{ __('Potongan') }}</a>
              <a class="collapse-item" href="{{ route('mst-bonus.index') }}">{{ __('Bonus') }}</a> --}}
                    {{-- <a class="collapse-item" href="{{ route('mst-kategori.index') }}">{{ __('Kategori') }}</a> --}}
                    {{-- <div class="collapse-divider"></div> --}}
                    {{-- <h6 class="collapse-header">Akun Pages:</h6> --}}
                    {{-- <a class="collapse-item" href="{{ route('user.index') }}">{{ __('User') }}</a> --}}
                    {{-- <a class="collapse-item" href="{{ route('mst-role.index') }}">{{ __('Role') }}</a> --}}
                </div>
            </div>
        </li>

    </div>
</nav>

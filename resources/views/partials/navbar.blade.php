{{-- TAMPILAN NAV --}}
<nav class="navbar navbar-expand-lg navbar-light bg-muted ">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('img/lg.png') }} " alt="logo" style="width:75px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container ">
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'posts' ? 'active' : '' }}" href="/posts">Kost</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) == 'categories' ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
            </ul>

            @auth
                <div class=" navbar-collapse  justify-content-end">
                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Welcome back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                @can('super_admin')
                                    <li>
                                        <a class="dropdown-item" href="/dashboard"><i
                                                class="bi bi-layout-text-sidebar-reverse"></i> My dashboard</a>
                                    </li>
                                @endcan
                                @can('admin')
                                    <li>
                                        <a class="dropdown-item" href="/dashboard"><i
                                                class="bi bi-layout-text-sidebar-reverse"></i> My dashboard</a>
                                    </li>
                                @endcan
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                            logout</button>
                                    </form>
                            </ul>
                        </li>
                    @else
                        <li class="navbar">
                            <a href="/login"
                                class="nav-link btn btn-outline-success{{ request()->segment(1) == 'login' ? 'active' : '' }}"><i
                                    class="bi bi-box-arrow-in-right"></i>
                                Masuk</a>
                        </li>
                    </ul>
                </div>
            @endauth


        </div>
    </div>
</nav>

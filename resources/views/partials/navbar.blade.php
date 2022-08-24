{{-- TAMPILAN NAV --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
        <a class="navbar-brand ms-4" href="/"><img src="/img/logo1.jpeg" alt="logo" style="width: 30px"></a>
        <a class="navbar-brand" href="/"><img src="/img/kost.png" alt="logo" style="width: 110px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container ">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'about' ? 'active' : '' }}"
                            href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'posts' ? 'active' : '' }}"
                            href="/posts">Kost</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'categories' ? 'active' : '' }}"
                            href="/categories">Categories</a>
                    </li>
                </ul>

                <div class=" navbar-collapse  justify-content-end">
                    <ul class="navbar-nav ms-aut">
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Welcome back, {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="/dashboard"><i
                                                class="bi bi-layout-text-sidebar-reverse"></i> My dashboard</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i
                                                    class="bi bi-box-arrow-right"></i>
                                                logout</button>
                                        </form>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle btn btn-muted" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Login
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/login"><i class="bi bi-box-arrow-in-right"></i>
                                            Pemilik
                                            Kost</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/login"><i class="bi bi-box-arrow-in-right"></i>
                                            Pencari
                                            Kost</a></li>
                                </ul>
                            </li>
                            {{-- <li class="nav-item">
          <a href="/login" class="nav-link btn btn-muted{{ request()->segment(1) == 'login' ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>
            Login</a>
        </li> --}}
                        @endauth
                    </ul>
                </div>


            </div>
        </div>
</nav>

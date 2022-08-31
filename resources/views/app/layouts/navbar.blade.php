<!-- ======= Header ======= -->
<header id="nav" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
<<<<<<< HEAD
                <img src="{{ asset('img/lg.png') }} " alt="logo" style="width:70px;">
            </a>
        <!-- Uncomment below if you prefer to use an image logo -->
=======

        <a href="/"><img src="/img/logo3.png" alt="logo" style="width: 50px"></a>
        {{-- <h1 class="logo"><a href="index.html">BizLand<span></span></a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->


>>>>>>> a6505bf521eff32665a3b5fc05ab6e3edd903ae1

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="
                    @if(Request::is('pesan*'))
                        /
                    @else
                        #hero
                    @endif
                    ">Home</a></li>
                <li><a class="nav-link scrollto" href="
                    @if(Request::is('pesan*'))
                        /
                    @else
                        #about
                    @endif
                    ">About</a></li>
                <li><a class="nav-link scrollto {{ Request::is('pesan*') ? 'active' : '' }}" href="#portfolio">Kost</a></li>
                <li><a class="nav-link scrollto " href="#services">Kategori</a></li>
<<<<<<< HEAD
                <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
=======
                <li><a class="nav-link scrollto" href="#team">Pemilik</a></li>
<<<<<<< HEAD
                <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
=======
                <li class="dropdown"><a href="/login"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
>>>>>>> 9fc55fbd2b4e4060d57482cb1c7813fcef98f6a4
>>>>>>> a6505bf521eff32665a3b5fc05ab6e3edd903ae1

                <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

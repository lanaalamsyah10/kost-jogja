<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">BizLand<span></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- \\<a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

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
                <li><a class="nav-link scrollto" href="#team">Pemilik</a></li>
                <li class="dropdown"><a href="/login"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

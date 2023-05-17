<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">SGE </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="/" class="logo me-auto"><img src="/site/assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="/">Início</a></li>

                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/admin/home/') }}" class="nav-link scrollto">Painel</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="nav-link scrollto">Entrar</a></li>

                    @endauth
                @endif

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

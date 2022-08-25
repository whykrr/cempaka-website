<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        {{-- <h1 class="logo me-auto"><a href="index.html">Cempaka Foundation</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ asset('img/favicon.png') }}"
                alt="Cempaka Foundation" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ url('/#hero') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/#tentang') }}">Tentang</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/#unit-usaha') }}">Unit Usaha</a></li>
                <li><a class="nav-link scrollto " href="{{ url('/#partner') }}">Partner Kami</a></li>
                <li><a class="nav-link scrollto " href="{{ url('/#galeri') }}">Galeri</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/#blog-artikel') }}">Blog & Artikel</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/#contact') }}">Contact</a></li>
                <li><a class="getstarted scrollto" href="#">Login Partner</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

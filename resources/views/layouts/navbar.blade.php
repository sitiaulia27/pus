
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

    <a href="" class="logo"><img src="{{ asset('img/polindra.png')}}" alt="" class="img-fluid"></a>
    <h1 class="logo">UPT PERPUSTAKAAN</a></h1>


      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link {{ setActive('layouts.index') }}" href="{{ route('layouts.index') }}">Home</a></li>
            <li><a class="nav-link {{ setActive('profil') }}" href="{{ route('profil') }}">Profil</a></li>
            <!-- <li><a class="nav-link" href="">Aktivitas</a></li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pelayanan
                </a>
                    <ul>
                    <li><a class="nav-link {{ setActive('peminjaman') }}" href="{{ route('peminjaman') }}">Form Peminjaman Buku</a></li>
                    <li><a class="nav-link" href="#">Layanan Sirkulasi</a></li>
                    <li><a class="nav-link" href="#">Layanan Referensi</a></li>
                    <li><a class="nav-link" href="#">Peminjaman Dan Pengembalian Buku</a></li>
                    </ul>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Layanan Lainnya
                </a>
                <ul>
                <li><a class="nav-link" href="http://perpustakaan.polindra.ac.id">OPAC</a></li>
                <li><a class="nav-link" href="https://kubuku.id/download/e-perpustakaan-polindra">KUBUKU</a></li>
                <li><a class="nav-link" href="http://digilib.polindra.ac.id">DIGIBLI</a></li>
                <li><a class="nav-link" href="https://sista.polindra.ac.id/">REPOSITORY</a></li>
                <li><a class="nav-link" href="{{ route('login') }}">LOGIN</a></li>
                </ul>
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
</div>
</header><!-- End Header -->

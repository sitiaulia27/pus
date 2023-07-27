<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

    <a class="logo"><img src="{{ asset('img/polindra.png')}}" alt="" class="img-fluid"></a>
    <h5 class="logo">UPT PERPUSTAKAAN POLINDRA</h5>


    <nav id="navbar" class="navbar" class="menu-back cbp-af-header">
        <ul>
            <li><a class="nav-link {{ setActive('layouts.index') }}" href="{{ route('layouts.index') }}">Home</a></li>
            <li><a class="nav-link {{ setActive('profil') }}" href="{{ route('profil') }}">Profil</a></li>
            <!-- <li><a class="nav-link {{ setActive('aktivitas') }}" href="{{ route('aktivitas') }}">Aktivitas</a></li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pelayanan
                </a>
                    <ul>
                    <!-- <li><a class="nav-link {{ setActive('form') }}" href="{{ route('form') }}">Form Peminjaman Buku</a></li> -->
                    <li><a class="nav-link {{ setActive('tatatertib') }}" href="{{ route('tatatertib') }}">Tata Tertib</a></li>
                    <li><a class="nav-link {{ setActive('sirkuref') }}" href="{{ route('sirkuref') }}">Layanan Sirkulasi & Referensi</a></li>
                    <li><a class="nav-link {{ setActive('baca_admin') }}" href="{{ route('baca_admin') }}">Layanan Baca di Tempat & Administrasi</a></li>
                    <li><a class="nav-link {{ setActive('peminjaman') }}" href="{{ route('peminjaman') }}">Peminjaman & Pengembalian Buku</a></li>
                    <li><a class="nav-link {{ setActive('layanan_lainnya') }}" href="{{ route('layanan_lainnya') }}">Layanan Lainnya</a></li>
                    </ul>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Layanan Lainnya
                </a>
                <ul>
                <li><a class="nav-link" href="http://perpustakaan.polindra.ac.id">OPAC</a></li>
                <li><a class="nav-link" href="https://kubuku.id/download/e-perpustakaan-polindra">KUBUKU</a></li>
                <li><a class="nav-link" href="http://digilib.polindra.ac.id">DIGITAL LIBRARY</a></li>
                <li><a class="nav-link" href="https://sista.polindra.ac.id/">REPOSITORY</a></li>
                <li><a class="nav-link" href="{{ route('login') }}">LOGIN</a></li>
                </ul>
            </li>
            <li><a class="nav-link {{ setActive('informasi') }}" href="{{ route('informasi') }}">Informasi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
</div>
</header><!-- End Header -->

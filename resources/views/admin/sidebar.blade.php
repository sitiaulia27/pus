<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="">Perpustakaan</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a class="nav-link {{ setActive('admin.content') }}" href="{{ route('admin.content') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">Menu</li>
            <li class="dropdown">
            <a class="nav-link {{ setActive('karyawan.index') }}" href="{{ route('karyawan.index') }}"><i class="fas fa-columns"></i> <span>Data Karyawan</span></a>
            </li>

            <li class="dropdown">
              <a class="nav-link {{ setActive('berita.index') }}" href="{{ route('berita.index') }}"><i class="far fa-file-alt"></i> <span>Berita</span></a>
            </li>

            <li class="dropdown">
              <a class="nav-link {{ setActive('akreditasi.index') }}" href="{{ route('akreditasi.index') }}"><i class="far fa-file"></i> <span>Akreditasi</span></a>
            </li>

            <li class="dropdown">
              <a href="{{ route('logout') }}" class="nav-link"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
            </li>
        </aside>
</div>

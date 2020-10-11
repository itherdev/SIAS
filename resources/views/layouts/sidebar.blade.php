<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">SIAS DISDUKCAPIL</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">St</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Starter</li>
        <li class="active"><a class="nav-link" href="{{ route('crud')}}"><i class="far fa-square"></i> <span>crud Page</span></a></li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Master Aplikasi</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('operator')}}">Daftar Operator</a></li>
              <li><a class="nav-link" href="#">Daftar Kategori Pelayanan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Stock Opname</span></a>
            <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('arsip')}}">Daftar Arsip</a></li>
              <li><a class="nav-link" href="{{ route('op-berkas')}}">Stock Opname Berkas</a></li>
              <li><a class="nav-link" href="#">Stock Opname Buku</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Peminjaman Arsip</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="#">Peminjaman Arsip Berkas</a></li>
              <li><a class="nav-link" href="#">Peminjaman Arsip Buku</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Pengembalian Arsip</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="#">Pengembalian Arsip Berkas</a></li>
              <li><a class="nav-link" href="#">Pengembalian Arsip Buku</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Laporan/Report</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="#">Daftar Arsip</a></li>
              <li><a class="nav-link" href="#">Laporan Stock Opname Berkas</a></li>
              <li><a class="nav-link" href="#">Laporan Stock Opname Buku</a></li>
              <li><a class="nav-link" href="#">Laporan Pengembalian dan Peminjaman Arsip Berkas</a></li>
              <li><a class="nav-link" href="#">Laporan Pengembalian dan Peminjaman Arsip Buku</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="#"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
        </ul>

        {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div> --}}
    </aside>
  </div>
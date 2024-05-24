<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__wobble" src="{{ url('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60"
    width="60">
</div>
<!-- Brand Logo -->
<a href="index3.html" class="brand-link text-decoration-none">
  <img src="{{ url('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
  <span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ url('lte/dist/img/sarhan.jpg') }}" style="width: 90%; height: 40px;"
        class="brand-image img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      {{-- <a href="#" class="d-block text-decoration-none">{{ Auth::user()->name }}</a> --}}
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
      with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="{{ url('/dosen') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Dosen</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/tahun_akademik') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p class="">Tahun Akademik</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/fakultas') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fakultas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/jenjang') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Jenjang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ ('/kelas') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kelas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ ('/prodi') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Prodi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ ('/ruang') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ruang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/mahasiswa') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Mahasiswa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/matkul') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Matakuliah</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/jadwal') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Jadwal</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/produk') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>produk</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</div>
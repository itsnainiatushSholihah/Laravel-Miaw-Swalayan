<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/img/logo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Miauw Swalayan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Pororo</a>
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

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="fas fa-yin-yang"></i>
                    {{-- <i class="nav-icon fas fa-chart-pie"></i> --}}
                  <p>
                    Beranda
                  </p>
                </a>
            </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fas fa-copy"></i> --}}
              <i class="fas fa-comment-dollar"></i>
              <p>
                Transaksi
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/transactions/create" class="nav-link">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/transactions" class="nav-link">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Lihat</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fas fa-copy"></i> --}}
              <i class="fas fa-users"></i>
              <p>
                Customer
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/customers/create" class="nav-link">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/customers" class="nav-link">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Lihat</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fas fa-copy"></i> --}}
              <i class="fas fa-cookie-bite" style="color: #f7fcfb;"></i>
              <p>
                Barang
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/stuff/create" class="nav-link">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/stuffs" class="nav-link">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Lihat</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fas fa-copy"></i> --}}
              <i class="fas fa-cat"></i>
              <p>
                Kategori
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/categories/create" class="nav-link">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/categories" class="nav-link">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Lihat</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fas fa-copy"></i> --}}
              <i class="fas fa-user"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/users/create" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/users" class="nav-link">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Lihat</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
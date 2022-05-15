
<!-- Header -->
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>

          <!-- Pencarian -->
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Riwayat
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Hasil Pencarian
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>

          <!-- Profil -->
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block" href="">    Selamat Datang, <b><?php echo $this->session->userdata('nama') ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profil
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url('auth/ganti_password/') ?>" class="dropdown-item has-icon text-warning">
                <i class="fas fa-cog"></i> Ganti Password
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url('auth/logout/') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>

    <!--SideBar-->
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Elektronik Kita</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">EK</a>
          </div>
          <!-- menu -->
          <ul class="sidebar-menu">
              <!-- Dashboard -->
              <li><a class="nav-link" href="<?php echo base_url('admin/dashboard')?>"><i class="fas fa-th-large"></i> <span>Dashboard</span></a></li>

              <!-- Data Produk -->
              <li><a class="nav-link" href="<?php echo base_url('admin/produk')?>"><i class="fas fa-fire"></i> <span>Data Produk</span></a></li>

              <!-- Data Kategori-->
              <li><a class="nav-link" href="<?php echo base_url('admin/kategori')?>"><i class="fas fa-columns"></i> <span>Kategori</span></a></li>

              <!-- Data Pembeli -->
              <li><a class="nav-link" href="<?php echo base_url('admin/data_pembeli')?>"><i class="fas fa-user"></i> <span>Data Pembeli</span></a></li>

              <!-- Transaksi -->
              <li><a class="nav-link" href="<?php echo base_url('admin/invoice')?>"><i class="fas fa-file-alt"></i> <span>Invoice</span></a></li>

              <!-- Laporan -->
              <li><a class="nav-link" href="<?php echo base_url('admin/laporan')?>"><i class="fas fa-exclamation"></i> <span>Laporan</span></a></li>
            </ul>

        </aside>
      </div>
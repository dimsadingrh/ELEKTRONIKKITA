
<!-- Header -->
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>

          <!-- Profil -->
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block" href="">    Selamat Datang, <b><?php echo $this->session->userdata('nama') ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
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
            <a href="<?php echo base_url('admin/dashboard')?>">Elektronik Kita</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url('admin/dashboard')?>">EK</a>
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

            </ul>

        </aside>
      </div>
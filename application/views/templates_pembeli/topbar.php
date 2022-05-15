
    <body>
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?php echo base_url('welcome') ?>">Elektronik Kita</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="<?php echo base_url('welcome') ?>">Beranda</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo base_url('pembeli/Kategori/gadget') ?>">Gadget</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('pembeli/Kategori/peralatan_rumah_tangga') ?>">Peralatan Rumah Tangga</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('pembeli/Kategori/peralatan_jaringan') ?>">Peralatan Jaringan</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('pembeli/Kategori/perkakas') ?>">Perkakas</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!--<form class="d-flex">
                        <a class="nav-link btn btn-outline-dark bi-cart-fill me-1" href="<?php echo base_url('pembeli/dashboard/detail_keranjang/' .$this->cart->total_items(). 'items') ?>"> Keranjang</a>
                        <span class="badge bg-dark text-white ms-1 rounded-pill"><?php $keranjang = ''. $this->cart->total_items() ?></span>
                    </form>-->

                    <div class="navbar">
                        <form class="d-flex"> 
                                <a class="nav-link btn btn-outline-dark bi-cart-fill me-1 mr-2"
                                    <?php $keranjang = '    Keranjang   '. $this->cart->total_items() ?>
                                    <?php echo anchor('pembeli/dashboard/detail_keranjang/',$keranjang) ?>
                                </a>   
                        </form>
                    </div>
                    
                    <form>
                        <li class="nav-item dropdown">
                            <?php  if ($this->session->userdata('nama')) { ?>
                                <a class="nav-link dropdown-toggle bi bi-person-fill" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">    Selamat Datang, <b><?php echo $this->session->userdata('nama') ?></b></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item bi bi-person" href="<?php echo base_url('pembeli/DetailPembeli/detail_pembeli/'); ?>">    Profil Saya</a></li>
                                    <li><a class="dropdown-item bi bi-gear text-warning" href="<?php echo base_url('auth/ganti_password/'); ?>">   Ganti Password</a></li>
                                    <li><a class="dropdown-item bi bi-box-arrow-left text-danger" href="<?php echo base_url('auth/logout/');?>">    Logout</a></li>
                                </ul>
                            <?php }else{ ?>
                                <form class="d-flex">
                                    <li><a class="nav-link btn btn-outline-dark bi bi-person-fill me-1" href="<?php echo base_url('auth/login/'); ?>"> Login</a></li>
                                </form>
                            <?php } ?>
                        </li>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-1 px-lg-1 my-1">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Belanja Pas & Lengkap</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Hanya Di Elektronik Kita</p>
                </div>
            </div>
        </header>
        <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(103, 119, 239, 1)" offset="0%"></stop><stop stop-color="rgba(103, 119, 239, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,60L15,51.7C30,43,60,27,90,31.7C120,37,150,63,180,66.7C210,70,240,50,270,46.7C300,43,330,57,360,61.7C390,67,420,63,450,60C480,57,510,53,540,43.3C570,33,600,17,630,15C660,13,690,27,720,28.3C750,30,780,20,810,20C840,20,870,30,900,41.7C930,53,960,67,990,71.7C1020,77,1050,73,1080,63.3C1110,53,1140,37,1170,28.3C1200,20,1230,20,1260,30C1290,40,1320,60,1350,56.7C1380,53,1410,27,1440,23.3C1470,20,1500,40,1530,46.7C1560,53,1590,47,1620,45C1650,43,1680,47,1710,41.7C1740,37,1770,23,1800,20C1830,17,1860,23,1890,28.3C1920,33,1950,37,1980,40C2010,43,2040,47,2070,53.3C2100,60,2130,70,2145,75L2160,80L2160,100L2145,100C2130,100,2100,100,2070,100C2040,100,2010,100,1980,100C1950,100,1920,100,1890,100C1860,100,1830,100,1800,100C1770,100,1740,100,1710,100C1680,100,1650,100,1620,100C1590,100,1560,100,1530,100C1500,100,1470,100,1440,100C1410,100,1380,100,1350,100C1320,100,1290,100,1260,100C1230,100,1200,100,1170,100C1140,100,1110,100,1080,100C1050,100,1020,100,990,100C960,100,930,100,900,100C870,100,840,100,810,100C780,100,750,100,720,100C690,100,660,100,630,100C600,100,570,100,540,100C510,100,480,100,450,100C420,100,390,100,360,100C330,100,300,100,270,100C240,100,210,100,180,100C150,100,120,100,90,100C60,100,30,100,15,100L0,100Z"></path></svg>
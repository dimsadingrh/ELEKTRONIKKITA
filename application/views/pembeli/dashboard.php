
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Elektronik Kita</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#!">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Tentang</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Semua Kategori</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Keranjang
                            <span class="badge text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Belanja Pas Dan Lengkap</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Hanya Di Elektronik Kita</p>
                </div>
            </div>
        </header>

        <!-- Section-->
        <?php foreach ($produk as $prdk) : ?>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-1 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url('assets/upload/') . $prdk->image ?>" alt="" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $prdk->nama_produk ?> </h5>
                                    <!-- Product price-->
                                    <h5>Harga : <?php echo $prdk->harga ?> </h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <?php
                                if ($prdk->stok == "0") {
                                    echo "<span class='btn btn-danger mt-auto ' disable>Stok Kosong</span>";
                                } else {
                                    echo anchor('pembeli/beli/tambah_beli/' . $prdk->id_produk, '<button class="btn btn-primary mt-auto">Beli</button>');
                                }

                                ?>
                                <a class="btn btn-warning mt-auto" href="<?php echo base_url('pembeli/dashboard/detail_produk/') . $prdk->id_produk ?>">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endforeach; ?>
        


        <!-- Section-->
        <?php foreach ($produk as $prdk) : ?>
        <section class="py-1">
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
                                    <h5>Rp. <?php echo $prdk->harga ?> </h5>
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
                                <dive class="text-center"><a class="btn btn-warning mt-auto" href="<?php echo base_url('pembeli/dashboard/detail_produk/') . $prdk->id_produk ?>">Detail</a></div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endforeach; ?>
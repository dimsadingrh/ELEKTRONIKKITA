<!-- Section-->
<div class="container fluid">
            <div class="row text-center mt-5 justify-content-center">
                <?php foreach ($perkakas as $pks) : ?>
                    <div class="card ml-5 mb-5 mr-2" style="width: 22rem;">
                        <div class="card2">
                            <img class="card-image" src="<?php echo base_url('assets/upload/') . $pks->image ?>" alt="" />
                        </div>
                        <div class="card-body">
                            <br>
                            <h5 class="card-title mb-1"><?php echo $pks->nama_produk ?></h5>
                            <br>
                            <h6><?php echo $pks->merk ?></h6><br>
                            <br>
                            <h6>Rp. <?php echo number_format($pks->harga, 0,',','.') ?></h6>
                            <?php
                                if ($pks->stok == "0") {
                                    echo "<div class='btn btn-danger' disable>Stok Kosong</div>";
                                }else {
                                    echo anchor('pembeli/dashboard/tambah_ke_keranjang/'.$pks->id_produk, '<div class="btn btn-warning2 bi-cart"></div>');
                                    echo anchor('pembeli/dashboard/detail_produk/'. $pks->id_produk,'<div class="btn btn-primary ">Detail</div>');
                                }
                            ?>
                        </div>
                    </div>    
                <?php endforeach; ?>
            </div>
        </div>
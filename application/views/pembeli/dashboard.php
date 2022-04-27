

        <!-- Section-->
        <div class="container fluid">
            <div class="row text-center mt-5 justify-content-center">
                <?php foreach ($produk as $prdk) : ?>
                    <div class="card ml-5 mb-5 mr-2" style="width: 22rem;">
                        <div class="card2">
                            <img class="card-image" src="<?php echo base_url('assets/upload/') . $prdk->image ?>" alt="" />
                        </div>
                        <div class="card-body">
                            <br>
                            <h5 class="card-title mb-1"><?php echo $prdk->nama_produk ?></h5>
                            <br>
                            <h6><?php echo $prdk->merk ?></h6><br>
                            <br>
                            <h6>Rp. <?php echo number_format($prdk->harga, 0,',','.') ?></h6>
                            <?php
                                if ($prdk->stok == "0") {
                                    echo "<div class='btn btn-danger' disable>Stok Kosong</div>";
                                }else {
                                    echo anchor('pembeli/tambah_ke_keranjang/'.$prdk->id_produk, '<div class="btn btn-warning2 bi-cart"></div>');
                                    echo anchor('pembeli/dashboard/detail_produk/'. $prdk->id_produk,'<div class="btn btn-primary ">Detail</div>');
                                }
                            ?>
                        </div>
                    </div>    
                <?php endforeach; ?>
            </div>
        </div>
        


<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <img width="500px" src="<?php echo base_url('assets/upload/'. $dt->image)?>">
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <br></br>
                            <br>
                            <tr>
                                <th>Merk</th>
                                <td><?php echo $dt->merk ?></td>
                            </tr>
                            <tr>
                                <th>Nama Produk</th>
                                <td><?php echo $dt->nama_produk ?></td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td><?php echo $dt->deskripsi ?></td>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <td><?php echo $dt->warna ?></td>
                            </tr>
                            <tr>
                                <th>Tahun Terbit</th>
                                <td><?php echo $dt->tahun_terbit ?></td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>Rp. <?php echo number_format($dt->harga, 0,',','.') ?></td>
                            </tr>
                            <tr>
                                <th>Stok</th>
                                <td>Tersisa (<?php echo $dt->stok ?>)</td>
                            </tr>
                            <tr>
                            <td></td>
                                <td>
                                    <?php
                                        if ($dt->stok == "0") {
                                            echo "<div class='btn btn-danger' disable>Stok Kosong</div>";
                                        }else {
                                            echo anchor('pembeli/dashboard/tambah_ke_keranjang/'.$dt->id_produk, '<div class="btn btn-warning2 bi-cart">  Masukan Ke Keranjang</div>');
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <a href="<?php echo base_url('welcome') ?>" class="btn btn-warning bi bi-house-door ml-3">   Kembali Ke Data Produk</a> 
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
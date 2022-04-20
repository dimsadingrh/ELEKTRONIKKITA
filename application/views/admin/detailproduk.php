<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Detail Produk</h1>
        </div>

        <a href="<?php echo base_url('admin/produk') ?>" class="btn btn-outline-primary mb-4">Kembali Ke Data Produk</a>

    </section>

    <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <img width="300px" src="<?php echo base_url().'/assets/upload/'. $dt->image ?>">
                    </div>
                    <div class="col-md-9">
                        <table class="table">
                            <tr>
                                <td>Kategori : </td>
                                <td>
                                    <?php
                                        if ($dt->kode_kategori == "gdt"){
                                            echo "Gadget";
                                        }elseif($dt->kode_kategori == "prm"){
                                            echo "Peralatan Rumah";
                                        }elseif($dt->kode_kategori == "prj"){
                                            echo "Peralatan Jaringan";
                                        }elseif($dt->kode_kategori == "pks"){
                                            echo "Perkakas";
                                        }else{
                                            echo "<span class='text-danger'>Tipe Produk Belum Terdaftar!</span>";
                                        }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Merk :</td>
                                <td><?php echo $dt->merk ?></td>
                            </tr>

                            <tr>
                                <td>Nama Produk :</td>
                                <td><?php echo $dt->nama_produk ?></td>
                            </tr>

                            <tr>
                                <td>Deksripsi :</td>
                                <td><?php echo $dt->deskripsi ?></td>
                            </tr>

                            <tr>
                                <td>Warna :</td>
                                <td><?php echo $dt->warna ?></td>
                            </tr>

                            <tr>
                                <td>Tahun Terbit :</td>
                                <td><?php echo $dt->tahun_terbit ?></td>
                            </tr>

                            <tr>
                                <td>Harga :</td>
                                <td><?php echo $dt->harga ?></td>
                            </tr>

                            <tr>
                                <td>Stok :</td>
                                <td><?php echo $dt->stok ?></td>
                            </tr>

                            <td>
                                <a href="<?php echo base_url('admin/produk/update_produk/').$dt->id_produk ?>" class="btn btn-primary mr-3 md-3">Update Produk</a>
                                <a href="<?php echo base_url('admin/produk/delete_produk/').$dt->id_produk ?>" class="btn btn-danger">Hapus Produk</a>
                            </td>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>
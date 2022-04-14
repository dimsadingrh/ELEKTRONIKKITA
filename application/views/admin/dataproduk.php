<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Data Produk</h1>
        </div>

        <a href="<?php echo base_url('admin/produk/tambahproduk') ?>" class="btn btn-primary mb-4">Tambah Produk</a>

        <?php echo $this->session->flashdata('pesan'); ?>

        <table class="table table-hover table-stripe table-border">
            <thread>
                <tr>
                <th>No</th>
                <th>image</th>
                <th>Merk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    $no=1;
                    foreach($produk as $prdk) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td>
                            <img width="90px" src="<?php echo base_url().'assets/upload/'.$prdk->image ?>">
                        </td>
                        <td><?php echo $prdk->merk ?></td>
                        <td><?php echo $prdk->nama_produk ?></td>
                        <td><?php echo $prdk->harga ?></td>
                        <td><?php echo $prdk->stok ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/produk/detail_produk/').$prdk->id_produk ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                            <a href="<?php echo base_url('admin/produk/delete_produk/').$prdk->id_produk ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="<?php echo base_url('admin/produk/update_produk/').$prdk->id_produk ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>
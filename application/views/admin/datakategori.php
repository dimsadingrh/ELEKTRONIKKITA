<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Data Kategori</h1>
        </div>
    </div>

    <a class="btn btn-primary mb-4" href="<?php echo base_url('admin/Kategori/tambah_kategori')?>">Tambah Kategori</a>

    <?php echo $this->session->flashdata('pesan') ?>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th width="20px">No</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
                <th width="150px">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($kategori as $ktgr): ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $ktgr->kode_kategori?></td>
                    <td><?php echo $ktgr->nama_kategori?></td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/kategori/update_kategori/'.$ktgr->id_kategori)?>"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger"href="<?php echo base_url('admin/kategori/delete_kategori/'.$ktgr->id_kategori)?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
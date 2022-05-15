<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Pembeli</h1>
        </div>

        <a href="<?php echo base_url('admin/data_pembeli/tambah_pembeli') ?>" class="btn btn-primary mb-4">Tambah Pembeli</a>

        <?php echo $this->session->flashdata('pesan'); ?>

        <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th width="20px">No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No telp</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th width="150px">Aksi</th>
                </tr>
            <?php
            $no=1;
            foreach($pembeli as $pmbl) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pmbl->nama ?></td>
                    <td><?php echo $pmbl->username ?></td>
                    <td><?php echo $pmbl->alamat ?></td>
                    <td><?php echo $pmbl->jenis_kelamin ?></td>
                    <td><?php echo $pmbl->no_telp ?></td>
                    <td><?php echo $pmbl->email ?></td>
                    <td><?php echo $pmbl->password ?></td>
                    <td>
                        <div class="row">
                            <a href="<?php echo base_url('admin/data_pembeli/delete_pembeli/'). $pmbl->id_pembeli ?>" class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash"></i></a>
                            <!--<a href="<?php echo base_url('admin/data_pembeli/update_pembeli/'). $pmbl->id_pembeli ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>-->
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
<</div>
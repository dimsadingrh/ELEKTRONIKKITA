<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Pembeli</h1>
        </div>

        <a href="<?php echo base_url('admin/data_pembeli/tambah_pembeli') ?>" class="btn btn-primary mb-4">Tambah Pembeli</a>
        <a href="<?= base_url('admin/laporan/cetak_laporan_pembeli'); ?>" class="btn btn-primary mb-4 ml-5"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M420 128.1V16H92v112.1A80.1 80.1 0 0 0 16 208v192h68v-32H48V208a48.054 48.054 0 0 1 48-48h320a48.054 48.054 0 0 1 48 48v160h-44v32h76V208a80.1 80.1 0 0 0-76-79.9Zm-32-.1H124V48h264Z"/><path fill="currentColor" d="M396 200h32v32h-32zm-280 64H76v32h40v200h272V296h40v-32H116Zm240 200H148V296h208Z"/></svg> Print</a>

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
                    <td>
                        <div class="row">
                            <a href="<?php echo base_url('admin/data_pembeli/delete_pembeli/'). $pmbl->id_pembeli ?>" class="btn btn-sm btn-danger ml-4"><i class="fas fa-trash"></i></a>
                            <!--<a href="<?php echo base_url('admin/data_pembeli/update_pembeli/'). $pmbl->id_pembeli ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>-->
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</div>
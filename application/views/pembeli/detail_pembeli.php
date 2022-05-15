
<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-body">
            <?php foreach ($pembeli as $pmbl) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table">
                            <br></br>
                            <br>
                            <tr>
                                <th>Nama</th>
                                <td><?php echo $pmbl->nama ?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td><?php echo $pmbl->username ?></td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td><?php echo $pmbl->deskripsi ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td><?php echo $pmbl->alamat ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td><?php echo $pmbl->jenis_kelamin ?></td>
                            </tr>
                            <tr>
                                <th>No Telepon</th>
                                <td><?php echo $pmbl->no_telp ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $pmbl->email ?></td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td><?php echo $pmbl->password ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <a href="<?php echo base_url('pembeli/dashboard/') ?>" class="btn btn-warning bi bi-house-door ml-3">   Kembali Ke Data Produk</a> 
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
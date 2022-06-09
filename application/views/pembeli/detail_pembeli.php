
<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <h5><b>Username</b></h5>
                            <p class="card-title"><?= $user; ?></p>
                        <tr>
                        <br>
                        <tr>
                            <h5><b>Nama</b></h5>
                            <p class="card-title"><?= $nama; ?></p>
                        </tr>
                        <br>
                        <tr>
                            <h5><b>Alamat</b></h5>
                            <p class="card-title"><?= $alamat; ?></p>
                        </tr>
                        <br>
                        <tr>
                            <h5><b>Jenis Kelamin</b></h5>
                            <p class="card-title"><?= $jenis_kelamin; ?></p>
                        </tr>
                        <br>
                        <tr>
                            <h5><b>No. Telepon</b></h5>
                            <p class="card-title"><?= $no_telp; ?></p>
                        </tr>
                        <br>
                        <tr>
                            <h5><b>Email</b></h5>
                            <p class="card-title"><?= $email; ?></p>
                        </tr>
                        <br>
                        <tr>
                            <a href="<?php echo base_url('pembeli/DetailPembeli/ubahprofil') ?>" class="btn btn-warning bi bi-gear ml-3">   Ubah Profil</a>
                            <a href="<?php echo base_url('auth/ganti_password') ?>" class="btn btn-danger bi bi-gear">   Ganti Password</a>
                        </tr>
                        <br>
                        <br>
                        <a href="<?php echo base_url('welcome') ?>" class="btn btn-primary bi bi-house-door">   Kembali Ke Data Produk</a>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
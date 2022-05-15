<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Data Pembeli</h1>
        </div>
    </section>

    <a href="<?php echo base_url('admin/data_pembeli') ?>" class="btn btn-outline-primary mb-4">Kembali Ke Data Pembeli</a>
    <?php foreach ($pembeli as $pmbl) : ?>
    <form method="POST" action="<?php echo base_url('admin/data_pembeli/update_pembeli_aksi') ?>">

        <div class="form-group">
            <label>Nama</label>
            <input type="hidden" name="id_pembeli" value="<?php echo $pmbl->id_pembeli?>">
            <input type="text" name="nama" class="form-control" value="<?php echo $pmbl->nama ?>">
            <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $pmbl->username?>">
            <?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $pmbl-> alamat?>">
            <?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="<?php echo $pmbl-> jenis_kelamin?>"><?php echo $pmbl->jenis_kelamin?></option>
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <?php echo form_error('jenis_kelamin','<span class="text-small text-danger">','</span>') ?>
        </div>
        <div class="form-group">
            <label>No Telp</label>
            <input type="text" name="no_telp" class="form-control" value="<?php echo $pmbl->no_telp?>">
            <?php echo form_error('no_telp','<span class="text-small text-danger">','</span>') ?>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $pmbl->email?>">
            <?php echo form_error('email','<span class="text-small text-danger">','</span>') ?>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="passwordl" class="form-control" value="<?php echo $pmbl->password?>">
            <?php echo form_error('password','<span class="text-small text-danger">','</span>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
    <?php endforeach; ?>
</div>

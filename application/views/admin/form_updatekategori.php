<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Update Kategori</h1>
        </div>
    </div>

    <a href="<?php echo base_url('admin/kategori') ?>" class="btn btn-outline-primary mb-4">Kembali Ke Data Produk</a>

    <?php foreach ($kategori as $ktgr) : ?>
    <form method="POST" action="<?php echo base_url('admin/kategori/update_kategori_aksi') ?>" enctype="multipart/form-data"> 
        <div class="form-group">
            <label>Kode Kategori</label>
            <input type="hidden" name="id_kategori" value="<?php echo $ktgr->id_kategori ?>">
            <input type="text" name="kode_kategori" class="form-control" value="<?php echo $ktgr->kode_kategori ?>">
            <?php echo form_error('kode_kategori','<div class="text-small text-danger">','</div>'); ?>
        </div>

        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" value="<?php echo $ktgr->nama_kategori ?>">
            <?php echo form_error('nama_kategori','<div class="text-small text-danger">','</div>'); ?>
        </div>

        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
    <?php endforeach; ?>
</div>
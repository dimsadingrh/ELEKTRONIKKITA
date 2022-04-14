<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Produk</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form method="post" action="<?php echo base_url('admin/produk/tambah_produk_aksi') ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Kategori Produk</label>
                            <select name="kode_kategori" class="form-control">
                                <option value="">--Pilih Tipe Kategori--</option>
                                <?php foreach ($kategori as $ktg) : ?>
                                    <option value="<?php echo $ktg->kode_kategori?>"> 
                                        <?php echo $ktg->kode_kategori?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('kode_kategori','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text" name="merk" class="form-control">
                            <?php echo form_error('merk','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control">
                            <?php echo form_error('nama_produk','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control">
                            <?php echo form_error('deskripsi','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Warna</label>
                            <input type="text" name="warna" class="form-control">
                            <?php echo form_error('warna','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Tahun Terbit</label>
                            <input type="text" name="tahun_terbit" class="form-control">
                            <?php echo form_error('tahun_terbit','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control">
                            <?php echo form_error('harga','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" name="stok" class="form-control">
                            <?php echo form_error('stok','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        <button type="button" class="btn btn-danger mt-3 ml-4">Reset</button>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
</div>
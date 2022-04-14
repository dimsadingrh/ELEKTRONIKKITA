<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Produk</h1>
        </div>

        <div class="card">
            <div class="card-body">

                <?php foreach ($produk as $prdk) : ?>

                <form method="post" action="<?php echo base_url('admin/produk/update_produk_aksi') ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md6">
                        <div class="form-group">
                            <label>Kategori Produk</label>
                            <input type="hidden" name="id_produk" value="<?php echo $prdk->id_produk ?>">
                            <select name="kode_kategori" class="form-control">
                                <option value="<?php echo $prdk->kode_kategori ?>"><?php echo $prdk->kode_kategori ?></option>
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
                            <input type="text" name="merk" class="form-control" value="<?php echo $prdk->merk ?>">
                            <?php echo form_error('merk','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="<?php echo $prdk->nama_produk ?>">
                            <?php echo form_error('nama_produk','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" value="<?php echo $prdk->deskripsi ?>">
                            <?php echo form_error('deskripsi','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Warna</label>
                            <input type="text" name="warna" class="form-control" value="<?php echo $prdk->warna ?>">
                            <?php echo form_error('warna','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Tahun Terbit</label>
                            <input type="text" name="tahun_terbit" class="form-control" value="<?php echo $prdk->tahun_terbit ?>">
                            <?php echo form_error('tahun_terbit','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?php echo $prdk->harga ?>">
                            <?php echo form_error('harga','<div class="text-small text-danger">','</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" name="stok" class="form-control" value="<?php echo $prdk->stok ?>">
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
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
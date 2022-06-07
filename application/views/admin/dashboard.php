      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                <a href="<?= base_url('admin/data_pembeli'); ?>"><i class="far fa-user" ></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Pelanggan</h4>
                  </div>
                  <div class="card-body">
                  <?= $this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <a href="<?= base_url('admin/produk'); ?>"><i class="far fa-newspaper" ></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Stok Barang</h4>
                  </div>
                  <div class="card-body">
                    <?php
                    $where = ['stok != 0'];
                    $totalstok = $this->ModelProduk->total('stok', $where);
                    echo $totalstok;
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                <a href="<?= base_url('admin/produk'); ?>"><i class="far fa-file-alt" ></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Invoice Total</h4>
                  </div>
                  <div class="card-body">
                    <?php
                    $where = ['invoice != 0'];
                    $totalinvoice = $this->ModelInvoice->total('jumlah', $where);
                    echo $totalinvoice;
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                <a href="<?= base_url('admin/data_pembeli'); ?>"><i class="far fa-user" ></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Admin</h4>
                  </div>
                  <div class="card-body">
                    <?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data Pelanggan</h4>
                  <div class="card-header-action">
                    <div class="text-center pt-1 pb-1">
                      <a href="<?= base_url('admin/data_pembeli'); ?>" class="btn btn-primary btn-lg btn-round">
                        Lihat Selengkapnya
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nama Pelanggan</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Role ID</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i = 1;
                        foreach ($pembeli as $pmbl) { ?>
                          <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $pmbl['nama']; ?></td>
                            <td><?= $pmbl['username']; ?></td>
                            <td><?= $pmbl['email']; ?></td>
                            <td><?= $pmbl['role_id']; ?></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data Produk</h4>
                  <div class="card-header-action">
                    <div class="text-center pt-1 pb-1">
                      <a href="<?= base_url('admin/data_pembeli'); ?>" class="btn btn-primary btn-lg btn-round">
                        Lihat Selengkapnya
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nama Produk</th>
                          <th>Kategori</th>
                          <th>Harga</th>
                          <th>Stok</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i = 1;
                        foreach ($produk as $prdk) { ?>
                          <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $prdk['nama_produk']; ?></td>
                            <td><?= $prdk['kode_kategori']; ?></td>
                            <td><?= $prdk['harga']; ?></td>
                            <td><?= $prdk['stok']; ?></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

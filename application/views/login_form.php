<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
            <h2>ELEKTRONIK KITA</h2>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('auth/login/') ?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus>
                    <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="<?php echo base_url('LupaPass') ?>" class="text-small">
                          Lupa Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2">
                    <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>

                  <div class="mt-5 text-muted text-center">
                    Belum mempunyai akun? <a href="<?php echo base_url('register') ?>">Daftar Sekarang !</a>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Kembali ke beranda ? <a href="<?php echo base_url('welcome') ?>">Klik disini</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
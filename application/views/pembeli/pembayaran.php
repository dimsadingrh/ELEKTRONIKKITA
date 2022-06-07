<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
                <br>
                <div class="btn btn-primary  btn-lg disabled" role="button" aria-disabled="true">
                    <?php
                    $grand_total = 0;
                    if ($keranjang = $this->cart->contents())
                    {
                        foreach ($keranjang as $item)
                        {
                            $grand_total = $grand_total + $item['subtotal'];
                        }

                        echo "<h2>Total Belanja Anda : Rp. ".number_format($grand_total, 0,',','.');
                    
                    ?>
                </div>
                <br><br>

                <h3><b>Checkout</b></h3>
                <form method="post" action="<?php echo base_url('pembeli/dashboard/proses_pesanan/') ?>">
                <br>

                    <div class="form-group">
                        <label><b>Nama<b></label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                    </div>
                    <br>

                    <div class="form-group">
                        <label><b>Alamat Lengkap<b></label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                    </div>
                    <br>

                    <div class="form-group">
                        <label><b>No. Telepon<b></label>
                        <input type="text" name="no_telp" placeholder="No Telepon Anda" class="form-control">
                    </div>
                    <br>

                    <div class="form-group">
                        <label><b>Pilih Pengiriman<b></label>
                        <select class="form-control" name="ekspedisi" placeholder="Pilih Opsi pengiriman" >
                            <option>Pilih Opsi Pengiriman</option>
                            <option>--- Pengiriman Reguler (3 - 5 Hari Kerja) ---</option>
                            <option>JNE</option>
                            <option>JNT</option>
                            <option>Si Cepat</option>
                            <option>Anter Aja</option>
                            <option>Tiki</option>
                            <option>--- Pengiriman Same-Day (6 - 8 Jam) ---</option>
                            <option>Go-send</option>
                            <option>Grab SameDay</option>
                            <option>Shopee Express</option>
                            <option>Lala Move</option>
                        </select>
                    </div>
                    <br>

                    <div class="form-group">
                        <label><b>Pilih Pembayaran<b></label>
                        <select class="form-control" name="via" placeholder="Pilih Opsi Pembayaran">
                            <option>Pilih Opsi Pembayaran</option>
                            <option>--- Virtual Account / MBanking / ATM ---</option>
                            <option>BNI</option>
                            <option>Mandiri</option>
                            <option>BCA</option>
                            <option>BRI</option>
                            <option>Cimb Niaga</option>
                            <option>--- E-Wallet ---</option>
                            <option>Gopay</option>
                            <option>Ovo</option>
                            <option>Shopee Pay</option>
                            <option>Dana</option>
                        </select>
                    </div>
                    <br>
                    
                    <button type="submit" class="btn btn-success mb-5">Pesan Sekarang</button>
                    
                </form>
                
                <?php
                } else {
                    echo "<h4><b>Keranjang Kosong, Pilih Produk Terlebih Dahulu !</b></h4>";
                } ?>
            </div>
        <div class="col-md-2"></div>
    </div>
</div>
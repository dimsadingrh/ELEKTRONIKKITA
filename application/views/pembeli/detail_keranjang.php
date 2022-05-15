<div class="container-fluid">
    <br>
    <br>
    <h1 class="bi bi-bag-fill" style="text-align:center;"><b>   Keranjang Belanja<b></h1>
    <br>
    <br>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga per unit</th>
            <th>Sub Total</th>
        </tr>
        <?php
        $no=1;
        foreach($this->cart->contents() as $items) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name']?></td>
                <td><?php echo $items['qty']?>x</td>
                <td>Rp. <?php echo number_format($items['price'])?></td>
                <td>Rp. <?php echo number_format($items['subtotal'], 0,',','.')?></td>
            </tr>

        <?php endforeach; ?>

        <tr>
            <th style="text-align: center" colspan="3">Biaya yang harus dibayar</th>
            <td colspan="1"></td>
            <td>Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
        </tr>
    </table>

    <div align="right">
        <a href="<?php echo base_url('pembeli/dashboard/hapus_keranjang/') ?>"><div class="btn btn-warning bi bi-trash-fill">   Hapus Keranjang</div></a>
        <a href="<?php echo base_url('welcome') ?>"><div class="btn btn-primary bi bi-house-door-fill"> Kembali Ke Beranda</div></a>
        <a href="<?php echo base_url('pembeli/dashboard/pembayaran/') ?>"><div class="btn btn-success bi bi-cash">   Lanjutkan Ke Pembayaran</div></a>
    </div>

</div>
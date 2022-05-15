<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Detail Pesanan <div>No. Invoice : <?php echo $invoice->id?></div></h1>
        </div>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th width="20px">Id Produk</th>
                <th>Nama Produk</th>
                <th>Jumlah Pesanan</th>
                <th>Harga per unit</th>
                <th>Harga Total</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            $total = 0;
            foreach ($pesanan as $psn) : 
                $subtotal = $psn->jumlah * $psn->harga;
                $total += $subtotal;
            ?>
            
            <tr>
                <td><?php echo $psn->id_produk ?></td>
                <td><?php echo $psn->nama_produk ?></td>
                <td><?php echo $psn->jumlah ?></td>
                <td>Rp. <?php echo number_format($psn->harga,0,',','.')?></td>
                <td>Rp. <?php echo number_format($subtotal,0,',','.')?></td>
                
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4" align="left">Biaya Total</td>
                <td>Rp. <?php echo number_format($total,0,',','.') ?></td>
            </tr>
            <tr>
                <a href="<?php echo base_url('admin/invoice') ?>"><div class="btn btn-primary mb-3">Kembali Ke Invoice</div></a>
            </tr>
        </tbody>
    </table>
</div>
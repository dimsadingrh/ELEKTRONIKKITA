<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Info Pemesanan Produk</h1>
        </div>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th width="20px">Id Invoice</th>
                <th>Nama Pemesan</th>
                <th>Alamat Pengiriman</th>
                <th>Tanggal Pemesanan</th>
                <th>Batas Pemesanan</th>
                <th width="150px">Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($invoice as $inv): ?>
        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td>
                <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/invoice/detail/'.$inv->id)?>"><i class="fas fa-eye"></i></a>
                <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/invoice/delete_detail/'.$inv->id)?>"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename: $title.xls");
header("Pragma: no-chace");
header("Expires: 0");
?>

 <h3><center>Laporan Data Produk Excel Elektronik Kita</center></h3>
 <br/>
 <table border="1">
  <thead>
   <tr>
    <th>Id</th>
    <th>Nama Produk</th>
    <th>Deskripsi</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Stok</th>
   </tr>
  </thead>
  <tbody>
   <?php
   $no = 1;
   foreach($produk as $prdk){
   ?>
   <tr>
     <th scope="row"><?= $no++; ?></th>  
     <td><?= $prdk['nama_produk']; ?></td>
     <td><?= $prdk['deskripsi']; ?></td>
     <td><?= $prdk['kode_kategori']; ?></td>
     <td><?= $prdk['harga']; ?></td>
     <td><?= $prdk['stok']; ?></td>         
   </tr>
   <?php
  }
  ?>
 </tbody>
</table>

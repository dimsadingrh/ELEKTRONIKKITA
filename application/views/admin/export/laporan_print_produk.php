<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
 <style type="text/css">
 .table-data{
   width: 100%;
   border-collapse: collapse;
  }

  .table-data tr th,
  .table-data tr td{
   border:1px solid black;
   font-size: 11pt;
   font-family:Verdana;
   padding: 10px 10px 10px 10px;
  }
  h3{
    font-family:Verdana;
  }
 </style>

 <h3><center>Laporan Data Produk Elektronik Kita</center></h3>
 <br/>
 <table class="table-data">
  <thead>
   <tr>
    <th>No</th>
    <th>Gambar</th>
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
     <td>
      <picture>
          <source srcset="" type="image/svg+xml">
          <img src="<?= base_url('assets/upload/') . $prdk['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:80px;">
      </picture>
     </td>
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


<script type="text/javascript">
 window.print();
</script>

</body>
</html>

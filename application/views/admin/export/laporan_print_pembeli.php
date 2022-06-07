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

 <h3><center>Laporan Data Pembeli</center></h3>
 <br/>
 <table class="table-data">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    foreach ($pembeli as $pmbl) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $pmbl['nama']; ?></td>
                            <td><?= $pmbl['username']; ?></td>
                            <td><?= $pmbl['alamat']; ?></td>
                            <!--<td>
                                        <a href="<?
                                                    ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                        <a href="<?
                                                    ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $b['judul_buku']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                    </td> -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>


<script type="text/javascript">
 window.print();
</script>

</body>
</html>

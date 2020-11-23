<?php
include 'koneksi.php';
$peserta = $koneksi->query("SELECT * FROM peserta");
?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- link untuk loading bootstrap.css -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <title>Pendaftaran Siswa Baru</title>
</head>
<body onload="window.print();">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="row">
                   <div class="col-md-12">
                       <h1>Daftar Peserta</h1>
                       <table class="table table-hover table-bordered">
                           <thead>
                               <tr>
                                   <th class="text-center">No</th>
                                   <th>Nama Peserta</th>
                                   <th class="text-center">Tanggal Lahir</th>
                                   <th class="text-center">JK</th>
                                   <th>Alamat</th>
                                   <th>Agama</th>
                               </tr>
                           </thead>
                           <tbody>
                               <?php $no = 1 ?>
                               <?php foreach ($peserta as $row) { ?>
                                   <tr>
                                       <td class="text-center"><?php echo $no++ ?></td>
                                       <td><?php echo $row['nama_peserta'] ?></td>
                                       <td class="text-center"><?php echo $row['tgl_lahir'] ?></td>
                                       <td class="text-center"><?php echo $row['jk'] ?></td>
                                       <td><?php echo $row['alamat'] ?></td>
                                       <td><?php echo $row['agama'] ?></td>
                                   </tr>
                               <?php } ?>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- script untuk loading jquery.min.js -->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

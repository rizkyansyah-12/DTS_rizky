<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- link untuk loading bootstrap.css -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <title>Pendaftaran Siswa Baru</title>
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h1>Formulir Pendaftaran Siswa Baru</h1>
               <div class="row">
                   <div class="col-md-12">
                       <h1>Tambah Peserta</h1>
                       <form action="insert_peserta.php" method="POST">
                           <div class="form-group">
                               <label for="" class="control-label">Nama Peserta</label>
                               <input type="text" name="nama_peserta" placeholder="Masukkan
                               Nama Peserta" class="form-control" required>
                           </div>
                           <div class="form-group">
                               <label for="" class="control-label">Tanggal Lahir</label>
                               <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir"
                               class="form-control" required>
                           </div>
                           <div class="form-group">
                               <label for="">Jenis Kelamin</label>
                               <div class="radio">
                                   <label>
                                       <input type="radio" name="jk" value="L">Laki-laki
                                   </label>
                               </div>
                               <div class="radio">
                                   <label>
                                       <input type="radio" name="jk" value="P">Perempuan
                                   </label>
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="" class="control-label">Alamat</label>
                               <textarea name="alamat" placeholder="Masukkan Alamat Lengkap"
                               class="form-control" required></textarea>
                           </div>
                           <div class="form-group">
                               <label for="" class="control-label">Agama</label>
                               <select name="agama" class="form-control">
                                   <option value="" selected disabled>--- Pilih Agama ---
                                   </option>
                                   <?php $all_agama = array('Islam', 'Kristen Katolik',
                                   'Kristen Protestan', 'Hindu', 'Budha'); ?>
                                   <?php foreach ($all_agama as $agama) { ?>
                                   <option value="<?php echo $agama ?>">
                                       <?php echo $agama ?>
                                   </option>
                                   <?php } ?>
                               </select>
                           </div>
                           <div class="form-group">
                               <button type="submit" class="btn btn-primary">Simpan</button>
                               <a href="index.php" class="btn btn-default">Kembali</a>
                           </div>
                       </form>
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

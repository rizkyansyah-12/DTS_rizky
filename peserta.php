<?php 
include "koneksi.php";

$sql = $koneksi->query("SELECT * FROM peserta");


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Pendaftaran Siswa Baru</h1>
				<div class="row">
					<div class="col-md-12">
						<h1>Daftar Peserta</h1>
						<p>
							<a class="btn btn-primary btn-md" href="index.php">Beranda</a>
							<a class="btn btn-primary btn-md" href="tambah-peserta.php">Tambah</a>
							<a class="btn btn-primary btn-md" href="cetak.php" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>Cetak</a>
							<a class="btn btn-primary btn-md" href="cetak-xls.php"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>Cetak XLS</a>

							<table class="table tabel-hover tabel-bordered">
								<thead>
									<tr>
										<td class="text-center">No</td>
										<td>Nama Lengkap</td>
										<td class="text-center">Tanggal Lahir</td>
										<td class="text-center">Jenis Kelamin</td>
										<td class="text-center">Alamat</td>
										<td class="text-center">Agama</td>
										<td class="text-center">Aksi</td>
									</tr>
								</thead>
								<tbody>
								<?php $no= 1; ?>
								<?php foreach ($sql as $row) : ?>
									<tr>
										<td class="text-center"><?= $no++ ?></td>
										<td><?= $row['nama_peserta']; ?></td>
										<td class="text-center"><?= $row['tgl_lahir']; ?></td>
										<td class="text-center"><?= $row['jk'] == 'L' ? 'Laki-laki' :
											'Perempuan'  ?></td>
										<td class="text-center"><?= $row['alamat']; ?></td>
										<td class="text-center"><?= $row['agama']; ?></td>
										<td class="text-center">
											<a class="btn btn-primary btn-md"  href="edit-peserta.php?id_peserta=<?= $row['id_peserta']; ?>">Edit</a>
											<a class="btn btn-primary btn-md"  href="hapus-peserta.php?id_peserta=<?= $row['id_peserta']; ?>">Hapus</a>
										</td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/js/jquery.min.js" ></script>
	<script src="assets/js/bootstrap.min.js" ></script>
</body>
</html>
<?php
include 'koneksi.php';
//ambil field
$nama_peserta = $_POST['nama_peserta'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$hasil = $db->query("insert into peserta
   (nama_peserta, tgl_lahir, jk,
   alamat, agama)
   values ('$nama_peserta', '$tgl_lahir',
   '$jk', '$alamat', '$agama')");
header('location:peserta.php');
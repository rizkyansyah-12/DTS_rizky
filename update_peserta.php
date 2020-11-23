<?php
include 'koneksi.php';
//ambil field
$id_peserta = $_POST['id_peserta'];
$nama_peserta = $_POST['nama_peserta'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$hasil = $db->query("update peserta set
   peserta.nama_peserta = '$nama_peserta',
   peserta.tgl_lahir = '$tgl_lahir',
   peserta.jk = '$jk',
   peserta.alamat = '$alamat',
   peserta.agama = '$agama'
   where peserta.id_peserta = $id_peserta");
header('location:peserta.php');
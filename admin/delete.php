<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id_mahasiswa   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from barang_tb where kode_barang='$id_mahasiswa'";
mysqli_query($koneksi, $query);
header("location:index.php");
?>
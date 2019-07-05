<?php 
include '../config.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:../index.php");
}
 
// menampilkan pesan selamat datang
echo "<b> Hai, selamat datang ".$_SESSION['username'];
 
?>

<br/>
<a href="logout.php">LOGOUT</a>

<html>
<head>
 <title>Admin</title>
 <style>
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}

.tombol {
  background: #3498db;
  color: #fff;
  border: 0;
  padding: 7px 8px;
  margin: 5px 1px;
}
 </style>
</head>
<body style="text-align:center"><hr />
 <h1>Tabel Barang</h1>
<hr />
<tr><td>

<form action="insert.php" method="post">

					<input type="submit" value="Insert" class = "tombol">

</td></tr>



 <table style="width:100%" class="table1">
  <tr>
   <th>Kode</th>
   <th>Nama</th>
   <th>Harga</th>
   <th>Stok</th>
   <th>Pilihan</th>
  </tr>
  
  <?php
  $koneksi = mysqli_connect("localhost","root","");
  $database = mysqli_select_db($koneksi, "databasebegginner_db");  
  
  $no = 1;
  $data = mysqli_query($koneksi,"select * from product_tb");
  while($r = mysqli_fetch_array($data)){
   $id_barang = $r['kode_barang'];
   $nama_barang = $r['nama_barang'];
   $harga_barang = $r['harga_barang'];
   $stok_barang = $r['stock'];
        ?>

   <td><?php echo $id_barang; ?></td>
   <td><?php echo $nama_barang; ?></td>
   <td><?php echo $harga_barang; ?></td>
   <td><?php echo $stok_barang; ?></td>
   <td>
<a href = "delete.php?kode_barang=<?php echo $r['kode_barang']; ?> "  type="button" class ="tombol">Delete</a>
<a href = "update.php?kode_barang=<?php echo $r['kode_barang']; ?> "  type="button" class ="tombol">Update</a>
</td>
  </tr>
  <?php 
  }
  ?>
 </table> 

</body>
</html>
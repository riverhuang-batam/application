<?php

include("connect.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['save'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['productname'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];


    $sql = "UPDATE product_tb SET productname='$productname', price='$price', stock='$stock' WHERE id=$id";
    $query = mysqli_query($con, $sql);

    // apakah query update berhasil?
    if( $query ) {
      echo "<script type='text/javascript'>alert('hi');</script>";
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
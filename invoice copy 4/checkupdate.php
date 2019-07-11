<?php

include("connect.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['save'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['customer_id'];
    $invoice_date = $_POST['invoice_date'];
 


    $sql = "UPDATE product_tb SET customer_id='$customer_id', invoice_date='$invoice_date' WHERE id=$id";
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
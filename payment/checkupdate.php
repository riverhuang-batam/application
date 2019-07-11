<?php

include("connect.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['save'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $checknumber = $_POST['checknumber'];
    $paymentdate = $_POST['paymentdate'];
    $amountpaid = $_POST['amountpaid'];


    $sql = "UPDATE product_tb SET checknumber='$checknumber', paymentdate='$paymentdate',amountpaid='$amountpaid' WHERE id=$id";
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
<?php
include 'connect.php';
// menyimpan data id kedalam variabel
$id = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from invoice_tb where id='$id'";
mysqli_query($con, $query);
header("location:index.php");
?>
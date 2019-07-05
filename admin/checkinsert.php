<?php
include 'connect.php';

if (@$_POST['save']) {
  $kode = @$_POST['id'];
  $nama = @$_POST['productname'];
  $harga = @$_POST['price'];
  $stock = @$_POST['stock'];

  mysqli_query($con, "INSERT INTO product_tb (id,productname,price,stock) VALUES ('$id', '$productname','$price', '$stock')");

?>

<script type="text/javascript">
  alert("Save success");
  window.location.href="index.php"

</script>

<?php  }
 ?>
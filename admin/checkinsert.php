<?php
include 'connect.php';

if (@$_POST['save']) {
  $id = @$_POST['id'];
  $productname = @$_POST['productname'];
  $price = @$_POST['price'];
  $stock = @$_POST['stock'];

  mysqli_query($con, "INSERT INTO product_tb (id,productname,price,stock) VALUES ('$id', '$productname','$price', '$stock')");

?>

<script type="text/javascript">
  alert("Save success");
  window.location.href="index.php"

</script>

<?php  }
 ?>
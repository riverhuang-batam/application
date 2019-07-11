<?php
include 'connect.php';

if (@$_POST['save']) {
  $id = @$_POST['id'];
  $productname = @$_POST['productname'];
  $quantity = @$_POST['quantity'];
  $price = @$_POST['price'];
  mysqli_query($con, "INSERT INTO orderdetail_tb (id,productname,quantity,price) VALUES ('$id', '$productname','$quantity','$price')");

?>

<script type="text/javascript">
  alert("Save success");
  window.location.href="index.php"

</script>

<?php  }
 ?>
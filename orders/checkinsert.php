<?php
include 'connect.php';

if (@$_POST['save']) {
  $id = @$_POST['id'];
  $orderid = @$_POST['orderid'];
  $orderdate = @$_POST['orderdate'];

  mysqli_query($con, "INSERT INTO orders_tb (id,orderid,orderdate) VALUES ('$id', '$orderid','$orderdate')");

?>

<script type="text/javascript">
  alert("Save success");
  window.location.href="index.php"

</script>

<?php  }
 ?>
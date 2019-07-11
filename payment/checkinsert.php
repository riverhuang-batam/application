<?php
include 'connect.php';

if (@$_POST['save']) {
  $id = @$_POST['id'];
  $checknumber = @$_POST['checknumber'];
  $paymentdate = @$_POST['paymentdate'];
  $amountpaid = @$_POST['amountpaid'];
  mysqli_query($con, "INSERT INTO payment_tb (id,checknumber,paymentdate,amountpaid) VALUES ('$id', '$checknumber','$paymentdate','$amountpaid')");

?>

<script type="text/javascript">
  alert("Save success");
  window.location.href="index.php"

</script>

<?php  }
 ?>
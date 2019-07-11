<?php
include 'connect.php';

if (@$_POST['save']) {
  $id = @$_POST['id'];
  $customer_id = @$_POST['customer_id'];
  $invoice_date = @$_POST['invoice_date'];

  mysqli_query($con, "INSERT INTO invoice_tb (id,customer_id,invoice_date) VALUES ('$id', '$customer_id','$invoice_date')");

?>

<script type="text/javascript">
  alert("Save success");
  window.location.href="index.php"

</script>

<?php  }
 ?>
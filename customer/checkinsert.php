<?php
include 'connect.php';

if (@$_POST['save']) {
  $id = @$_POST['id'];
  $fullname = @$_POST['fullname'];
  $address = @$_POST['address'];
  $phone = @$_POST['phone'];
  mysqli_query($con, "INSERT INTO customer_tb (id,fullname,address,phone) VALUES ('$id', '$fullname','$address','$phone')");

?>

<script type="text/javascript">
  alert("Save success");
  window.location.href="index.php"

</script>

<?php  }
 ?>
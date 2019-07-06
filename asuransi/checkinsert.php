<?php
include 'connect.php';

if (@$_POST['save']) {
  $id = @$_POST['id'];
  $date = @$_POST['date'];
  $insurancename = @$_POST['insurancename'];
  $price = @$_POST['price'];

  mysqli_query($con, "INSERT INTO insurance_tb (id,date,insurancename,price) VALUES ('$id', '$date','$insurancename', '$price')");

?>

<script type="text/javascript">
  alert("Save success");
  window.location.href="index.php"

</script>

<?php  }
 ?>
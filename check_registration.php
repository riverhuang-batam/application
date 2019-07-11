<?php
include 'connect.php';

if (@$_POST['save']) {

  $username = @$_POST['username'];
  $password = @$_POST['password'];
  $email = @$_POST['email'];

  mysqli_query($con, "INSERT INTO user_tb (username,password,email) VALUES ('$username', '$password','$email')");

?>

<script type="text/javascript">
  alert("SIMPAN berhasil");
  window.location.href="index.php"

</script>

<?php  }
 ?>
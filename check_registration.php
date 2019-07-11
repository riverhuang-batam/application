<?php
include 'connect.php';

if (@$_POST['save']) {
  $id = @$_POST['id'];
  $username = @$_POST['username'];
  $password = @$_POST['password'];
  $email = @$_POST['email'];

  mysqli_query($con, "INSERT INTO user_tb (id,username,password,email) VALUES ('$id','$username', '$password','$email')");

?>

<script type="text/javascript">
  alert("SIMPAN berhasil");
  window.location.href="index.php"

</script>

<?php  }
 ?>
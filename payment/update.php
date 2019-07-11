<?php

include("connect.php");

if( !isset($_GET['id']) ){
    header('Location: index.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM payment_tb WHERE id=$id";
$query = mysqli_query($con, $sql);
$seller = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<html>
<head>
	<title>River Shop</title>
	<link rel="stylesheet" type="text/css" href="./../index.css">
</head>
<body>

	<br/>
	<br/>
	<div class="login">
        <center><b><font color = "#3498db" face="impact" size = "+2">Edit Data</font></b></center>
	<br/>
		<form action="checkupdate.php" method="post">
			<div>
				<label>Id:</label>
				<input type="text" name="id" id="id" readonly value="<?php echo $seller['id'] ?>" />
			</div>
			<div>
				<label>CheckNumber:</label>
				<input type="text" name="checknumber" id="checknumber" value ="<?php echo $seller['checknumber'] ?>" />
			</div>
			<div>
				<label>Payment Date</label>
				<input type="text" name="paymentdate" id="paymentdate" value ="<?php echo $seller['paymentdate'] ?>" />
			</div>
			<div>
				<label>Amount Paid:</label>
				<input type="text" name="amountpaid" id="amountpaid" readonly value="<?php echo $seller['amountpaid'] ?>" />
			</div>
				<input type="submit" value="Register" class = "inputbutton" name = "save">
			
		</form>
		

	</div>
</body>

</html>
<?php

include("connect.php");

if( !isset($_GET['id']) ){
    header('Location: index.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM invoice_tb WHERE id=$id";
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
				<label>Customer Id:</label>
				<input type="text" name="customer_id" id="customer_id" value ="<?php echo $seller['customer_id'] ?>" />
			</div>
			<div>
				<label>Invoice Date</label>
				<input type="text" name="invoice_date" id="invoice_date" value ="<?php echo $seller['invoice_date'] ?>" />
			</div>
			
				<input type="submit" value="Register" class = "inputbutton" name = "save">
			
		</form>
		

	</div>
</body>

</html>
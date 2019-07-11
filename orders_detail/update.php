<?php

include("connect.php");

if( !isset($_GET['id']) ){
    header('Location: index.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM orderdetail_tb WHERE id=$id";
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
				<input type="number" name="id" id="id" readonly value="<?php echo $seller['id'] ?>" />
			</div>
			<div>
				<label>Product Name:</label>
				<input type="text" name="productname" id="productname" value ="<?php echo $seller['productname'] ?>" />
			</div>
			<div>
				<label>Quantity:</label>
				<input type="number" name="quantity" id="quantity" value ="<?php echo $seller['quantity'] ?>" />
			</div>
			<div>
				<label>Price:</label>
				<input type="number" name="price" id="price" readonly value="<?php echo $seller['price'] ?>" />
			</div>
			
				<input type="submit" value="Register" class = "inputbutton" name = "save">
			
		</form>
		

	</div>
</body>

</html>
<?php

include("connect.php");

if( !isset($_GET['id']) ){
    header('Location: index.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM insurance_tb WHERE id=$id";
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
				<label>Date:</label>
				<input type="date" name="date" id="date" value ="<?php echo $seller['date'] ?>" />
			</div>
			<div>
				<label>Insurance name</label>
				<input type="text" name="insurancename" id="insurancename" value ="<?php echo $seller['insurancename'] ?>" />
			</div>
			<div>
				<label>Price:</label>
				<input type="text" name="price" id="price" value ="<?php echo $seller['price'] ?>"/>
			</div>			
			
				<input type="submit" value="Register" class = "inputbutton" name = "save">
			
		</form>
		

	</div>
</body>

</html>
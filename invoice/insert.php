<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="./../index.css">
</head>
<body>

	<br/>
	<br/>
	<div class="login">
<center><b><font color = "#3498db" face="impact" size = "+2">Input Barang</font></b></center>
	<br/>
		<form action="checkinsert.php" method="post">
			<div>
				<label>Id:</label>
				<input type="text" name="id" id="id" />
			</div>
			<div>
				<label>Product Name:</label>
				<input type="text" name="productname" id="productname" />
			</div>
			<div>
				<label>Price:</label>
				<input type="text" name="price" id="price" />
			</div>
			<div>
				<label>Stock:</label>
				<input type="text" name="stock" id="stock" />
			</div>			
			
				<input type="submit" value="Register" class = "inputbutton" name = "save">
			
		</form>
		

	</div>
</body>

</html>
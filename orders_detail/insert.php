<html>
<head>
	<title>River Shop</title>
	<link rel="stylesheet" type="text/css" href="./../index.css">
</head>
<body>

	<br/>
	<br/>
	<div class="login">
<center><b><font color = "#3498db" face="impact" size = "+2">Input Order Detail</font></b></center>
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
				<label>Quantity:</label>
				<input type="text" name="quantity" id="quantity" />
			</div>
			<div>
				<label>Price:</label>
				<input type="text" name="price" id="price" />
			</div>
			
				<input type="submit" value="Register" class = "inputbutton" name = "save">
			
		</form>
		

	</div>
</body>

</html>
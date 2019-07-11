<html>
<head>
	<title>River Shop</title>
	<link rel="stylesheet" type="text/css" href="./../index.css">
</head>
<body>

	<br/>
	<br/>
	<div class="login">
<center><b><font color = "#3498db" face="impact" size = "+2">Input Customer</font></b></center>
	<br/>
		<form action="checkinsert.php" method="post">
			<div>
				<label>Id:</label>
				<input type="text" name="id" id="id" />
			</div>
			<div>
				<label>Fullname:</label>
				<input type="text" name="Fullname" id="Fullname" />
			</div>
			<div>
				<label>Address:</label>
				<input type="text" name="address" id="address" />
			</div>
			<div>
				<label>Phone:</label>
				<input type="text" name="phone" id="phone" />
			</div>
			
				<input type="submit" value="Register" class = "inputbutton" name = "save">
			
		</form>
		

	</div>
</body>

</html>
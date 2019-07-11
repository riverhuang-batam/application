<html>
<head>
	<title>River Shop</title>
	<link rel="stylesheet" type="text/css" href="./../index.css">
</head>
<body>

	<br/>
	<br/>
	<div class="login">
<center><b><font color = "#3498db" face="impact" size = "+2">Input Order</font></b></center>
	<br/>
		<form action="checkinsert.php" method="post">
			<div>
				<label>Id:</label>
				<input type="text" name="id" id="id" />
			</div>
			<div>
				<label>Customer Id:</label>
				<input type="text" name="orderid" id="orderid" />
			</div>
			<div>
				<label>Invoice Date:</label>
				<input type="date" name="orderdate" id="orderdate" />
			</div>
			
				<input type="submit" value="Register" class = "inputbutton" name = "save">
			
		</form>
		

	</div>
</body>

</html>
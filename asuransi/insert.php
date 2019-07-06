<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="./../index.css">
</head>
<body>

	<br/>
	<br/>
	<div class="login">
<center><b><font color = "#3498db" face="impact" size = "+2">Input Insurance</font></b></center>
	<br/>
		<form action="checkinsert.php" method="post">
			<div>
				<label>Id:</label>
				<input type="text" name="id" id="id" />
			</div>
			<div>
				<label>Date:</label>
				<input type="date" name="date" id="date" />
			</div>
			<div>
				<label>Insurance Name:</label>
				<input type="text" name="insurancename" id="insurancename" />
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
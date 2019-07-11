<html>

<head>
	<title>River Shop</title>
	<link rel="stylesheet" type="text/css" href="./../index.css">
</head>

<body>

	<br />
	<br />
	<div class="login">
		<center><b>
				<font color="#3498db" face="impact" size="+2">Input Payment</font>
			</b></center>
		<br />
		<form action="checkinsert.php" method="post">
			<div>
				<label>Id:</label>
				<input type="text" name="id" id="id" />
			</div>
			<div>
				<label>CheckNumber:</label>
				<input type="text" name="checknumber" id="checknumber" />
			</div>
			<div>
				<label>Payment Date:</label>
				<input style="width: 100%;
  padding: 8px 13px;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 2px;
  box-sizing: border-box;" type="date" name="paymentdate" id="paymentdate" />
			</div>
			<div>
				<label>Amount Paid:</label>
				<input type="text" name="amountpaid" id="amountpaid" />
			</div>
			<input type="submit" value="Register" class="inputbutton" name="save">

		</form>


	</div>
</body>

</html>
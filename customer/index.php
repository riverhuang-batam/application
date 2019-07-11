<?php
include '../connect.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:../index.php");
}

// menampilkan pesan selamat datang
echo "<h3> Welcome ".$_SESSION['username'];
?>

<button style="margin-left:1000px;" class ="inputbutton" onclick="window.location.href='logout.php'">LOGOUT</button>

<html>
<head>
<link rel="stylesheet" href="./../index.css">
 <title>River Shop</title>
 <style>
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}

.tombol {
  background: #3498db;
  color: #fff;
  border: 0;
  padding: 7px 8px;
  margin: 5px 1px;
}
 </style>
</head>
<body style="text-align:center"><hr />
 <h1 style="
  background-image: linear-gradient(to bottom right, blue, red);">Invoice</h1>
<hr />
<tr><td>

<form action="insert.php" method="post">

	<input style="margin-left:1200px" type="submit" value="Insert" class = "inputbutton">

</td></tr>



 <table style="width:100%" class="table1">
  <tr>
   <th>Id</th>
   <th>Fullname</th>
   <th>Address</th>
   <th>Phone</th>
   <th>Edit</th>
  </tr>

  <?php
  $con = mysqli_connect("localhost","root","");
  $database = mysqli_select_db($con, "databasebegginner_db"); 

  $no = 1;
  $data = mysqli_query($con,"select * from customer_tb");
  while($r = mysqli_fetch_array($data)){
   $id = $r['id'];
   $fullname = $r['fullname'];
   $address = $r['address'];
   $phone = $r['phone'];
        ?>

   <td><?php echo $id; ?></td>
   <td><?php echo $fullname; ?></td>
   <td><?php echo $address; ?></td>
   <td><?php echo $phone; ?></td>
   <td> 
   <br/>
   <a class="inputbutton" style="text-color:white;" href="delete.php?id=<?php echo $r['id'];?>">Delete</a>
   
   <a class="inputbutton" href="update.php?id=<?php echo $r['id']; ?>">Update</a>

</td>
  </tr>
  <?php
  }
  ?>
 </table>
</form>
</body>
</html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>Restaurant</title>
</head>

<body background="images1/banner2.jpg" style="background-size:100%; background-repeat:no-repeat;">
<h1 align="left" style="color: #ffffff; margin-top: 2%; margin-left: 2%;">
<i><a href="index.php" style="text-decoration: none; color: #ffffff;">Go Holiday</a></i>
</h1>


<h1 align="center" style="color: #0000000; margin-top: 27%; font-size:48px;">

</h1>
<hr width="100%" />
<div class="container">
<table align="center" class=" table table-responsive table-striped  " >
<tr>
    <th><h3><b>SNO</b></h3></th>
	<th><h3><b>Name</b></h3></th>
    <th><h3><b>Type</b></h3></th>
	<th><h3><b>City</b></h3></th>
	<th><h3><b>Address</b></h3></th>
	<th><h3><b>Contact No</b></h3></th>
	</tr>
	
	
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("project");

$str=mysql_query("Select * from holiday");
while($row=mysql_fetch_array($str))
{
	echo "<tr>
	<td><h3>$row[SNo]</h3></td>
	<td><h3>$row[Name]</h3></td>
	<td><h3>$row[Type]</h3></td>
	<td><h3>$row[City]</h3></td>
	<td><h3>$row[Address]</h3></td>
	<td><h3>$row[ContactNO]</h3></td>
	</tr>";
	}
?>
</table>
</div>
</body>
</html>
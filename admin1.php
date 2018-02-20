<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("project");
$b=$_REQUEST['name'];
$e=$_REQUEST['password'];
$str=mysql_query("select * from xyz where Email='$b' and Password='$e'");
$row=mysql_fetch_array($str);

if($b==$row['Email'] && $e==$row['Password'])
{
	$_SESSION['us']=$b;
	$_SESSION['pass']=$e;
	 header("location:session.php");
	
}
else
{
	header("location:admin.php"); 
	echo"no";
}
?>

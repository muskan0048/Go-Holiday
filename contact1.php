<?php

mysql_connect("localhost", "root", "");
mysql_select_db("project");
$a=$_REQUEST['name'];
$b=$_REQUEST['email'];
$c=$_REQUEST['phone'];
$d=$_REQUEST['city'];
$e=$_REQUEST['other'];
mysql_query("insert into contact values('', '$a', '$b', '$c', '$d', '$e')");

echo "Form Submitted Successfully";
?>
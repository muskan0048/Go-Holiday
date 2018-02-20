<?php

mysql_connect("localhost", "root", "");
mysql_select_db("project");
$a=$_REQUEST['name'];
$b=$_REQUEST['type'];
$c=$_REQUEST['city'];
$d=$_REQUEST['address'];
$e=$_REQUEST['contact'];
mysql_query("insert into holiday values('', '$a', '$b', '$c', '$d', '$e')");

?>
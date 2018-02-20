<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>Welcome to Go Holiday</title>
<script type="text/javascript">
	function abc(){
		if(document.form.name.value==""){
			alert("Enter Email to Subscribe");
		}
	}
</script>
<style type="text/css">
	#a1 {
		margin-left: 20%;
    width: 100px;
    height: 100px;
    background: red;
    transition: width 2s;
    -webkit-transition: width 2s; /* Safari 3.1 to 6.0 */
}

#a1:hover {
    width: 400px;
    height: 400px;
}

   #a2{
		margin-right: 20%;
    width: 100px;
    height: 100px;
    background: red;
    transition: width 2s;
    -webkit-transition: width 2s; /* Safari 3.1 to 6.0 */
}

#a2:hover {
    width: 400px;
    height: 400px;
}
</style>
</head>
<body style="background-image: url('images1/banner1.jpg'); background-size: 100% ; background-repeat: no-repeat; ">
<h1 align="left" style="color: #ffffff; margin-top: 2%; margin-left: 2%;">
<i><a href="index.php" style="text-decoration: none; color: #ffffff;">Go Holiday</a></i>
</h1>



<canvas id="myCanvas"  style="border:1px solid #d3d3d3; background-color: #ffffff; margin-left: 40%; margin-top: 10%" width="400%" height="60%">
Your browser does not support the HTML5 canvas tag.</canvas>

<script>

var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");


ctx.font = "30px Verdana";
// Create gradient
var gradient = ctx.createLinearGradient(0, 0, c.width, 0);
gradient.addColorStop("0", "purple");
gradient.addColorStop("0.3", "blue");
gradient.addColorStop("0.7", "green");
gradient.addColorStop("1.0", "red");
// Fill with gradient
ctx.strokeStyle = gradient;
ctx.strokeText("Great Choice for Holidays", 10, 40);

</script>
</div>
<div style="margin-top:27%;">
<?php
 include("nav.php");
?>
</div>
<div style="background-color: #ffffff; margin-top:33%;">
<h1 align="center">WHAT ARE YOU LOOKING FOR?</h1>
</div>

<div class="row">
<div class="col-md-3">
<a href="rest.php"><img src="images/p3.jpg"  alt="A Restaurant" height="300px"></a>
<h2 align="center"><a href="rest.php">A Restaurant</a></h2>

</div>
<div class="col-md-3 col-md-offset-1">
<a href="inn.php"><img src="images/p2.jpg"  alt="An Inn" height="300px"></a>
<h2 align="center"><a href="rest.php">An Inn</a></h2>

</div>
<div class="col-md-3 col-md-offset-1">
<a href="htl.php"><img src="images/p4.jpg"  alt="A Hotel" height="300px" ></a>
<h2 align="center"><a href="htl.php">A Hotel</a></h2>

</div>
</div>


<div style="background-color:#272727; color: #ffffff; margin-top:1%; height: 510px; padding-top: 1%">
<h1 align="center" >WHAT DO WE OFFER?</h1>
<div class="row">
<div class="col-md-4 col-md-offset-2">
<img id="a1" src="images/guide.jpg"    height="400px">
<h2 align="center" >Tourist Guides</h2>
</div>
<div class="col-md-4 col-md-offset-2">
<img id="a2" src="images/road.jpg" height="400px">
<h2 align="center" >Vehicles for Local Travelling</h2>
</div>
</div>


</div>
<div class="row">
<div class="col-md-12">
<div style="text-align: center; padding-top: 6%; padding-bottom: 10%">
<h1>Subscribe to our Newsletter</h1>
<form name="form">
<input type="text" name="name" placeholder="Enter your E-mail Address" style="font-size:larger;"  >
<br><br>
<input type="submit" value="Subscribe" onClick="abc();">
</form>
</div>
</div>
</div>
<div style="background-color: #272727; color: #ffffff; text-align: center; font-size:larger; padding-top: 2%; padding-bottom: 2%;">
&copy; by Go Holiday 
</div>
</body>
</html>
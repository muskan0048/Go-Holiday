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
<div style="margin-top:22%;">
<?php
 include("nav.php");
?>
</div>


<h1 align="center" style="color: #0000000; margin-top: 27%; font-size:48px;">
CONTACT US
</h1>
<hr width="100%" />
<div class="container">

<div class="row">        
<div class="col-md-12">
    <form id="form" method="post" action="contact1.php" >
    <div class="row">
    <div class="col-md-3 col-md-offset-3">
    <p>Enter Your Name</p>
            <h3><input id="name" type="text" placeholder="" name="name" ></h3></div>
           <div class="col-md-3 col-md-offset-1">
           <p>Enter Your E-mail</p>
            <h3><input id="email" type="text" placeholder="" name="email" ></h3><br></div></div>
<div class="row">
    <div class="col-md-3 col-md-offset-3">
    <p>Enter Your Conatct No</p>
        <h3><input id="phone" type="text" placeholder="" name="phone" ></h3>    </div>
<div class="col-md-3 col-md-offset-1">
<p>Entr Your City</p>
<h3><input id="city" type="text" placeholder="" name="city" ></h3><br /></div></div>


<div class="row"><div class="col-md-5 col-md-offset-5">
<p style="margin-left:20%;">Your Message</p>
<h3><textarea name="other" placeholder="" name="other"></textarea>
</h3>         
</div>
<div class="row">
<div class="col-md-4 col-md-offset-6">
<button type="submit" class="btn btn-lg btn-success">Submit</button>
</div>
</div>
</div>
</form>
<script>      
$("#form").submit(function()
      {
              if ($("#name").val() == "" || 
                  $("#email").val() == "" ||
				  $("#phone").val() == "" ||
				  $("#city").val() == "")         
                     
         {          
         	alert("Please fill up all the fields")
         	          return false        
         }      
      })    
</script>  
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div style="background-color: #272727; color: #ffffff; text-align: center; font-size:larger; padding-top: 2%; padding-bottom: 2%;">
&copy; by Go Holiday 
</div></div>
</div>

</body>
</html>
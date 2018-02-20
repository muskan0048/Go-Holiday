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
		
		margin-top:10%;
   
}
</style>
</head>
<body style="background-image: url('images1/banner1.jpg'); background-size: 100% ; background-repeat: no-repeat; ">
<h1 align="left" style="color: #ffffff; margin-top: 2%; margin-left: 2%;">
<i><a href="index.php" style="text-decoration: none; color: #ffffff;">Go Holiday</a></i>
</h1>
<div id="a1">
<div align="center"> 

<form id='form' method="get" action="admin1.php"> 
<br>

<h3><input type='text' name='name' placeholder="Enter Username"></h3>

<h3><input type="password" name='password' placeholder="Enter Password"></h3><br> 
<br>     
<button type="submit" class="btn btn-lg btn-primary">Submit</button>
<br>
<br>   
</form> 
</div>
</div>
<script>      
$('#form').submit(function()
      {
              if ($('#name').val() == '' || 
                  $('#email').val() == '')        
                     
         {          
         	alert('Please fill up both the fields')
         	          return false        
         }      
      })    
</script>  
</body>
</html>



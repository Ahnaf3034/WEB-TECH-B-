<?
session_start();
  $_SESSION;
?>
<?php include('server.php') ?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<center>
       <table border=0 width="1500px" height="50px"/>
 <tr> 
        <h1 class="head1"><i><b>BusTicket.com<br/> </b></i></h1>
		<td colspan=2><center><img src="Plogo.JPG" width="800px" height="300px"> </center>
		          
		          <right>
<p class="hp2"> <b>New User?</b>
<a href='register.php'>Registration |</a></p>
</right>
		 </td>

       	 </table>
		</center>

<div class ="tbl1">
<body  style = "background: url(seat1.jpg) ; background-size: 50%;">
 <div>
  	<h2 class="head2">Login</h2>
  </div>
	 
  <form name="myform" method="post" action="login.php" onsubmit="return validateform()">
	  <?php include('errors.php'); ?>
	<div class="inputb">
  	<div>
  		<label><b>User Name:</b></label>
  		<input type="text" name="username" >
  	</div><br/>
  	<div>
  		<label><b>Password:</b></label>
  		<input type="password" name="password">
  	</div>
	  <div>
	  <p><b><input type="checkbox" name="remember">Remember Me</b></p>
	  </div><hr/>
  	<div>
  		<button class="btn" type="submit" name="login_user">Login</button>
  	</div>
  	<p>
  		<b>New User? <a href="register.php">Register</a></b>
	  </p>
</div>
  </form>
  <script>  
function validateform(){  
var username=document.myform.username.value;  
var password=document.myform.password.value;  
  
if (username==null || username==""){  
  alert("Username required");  
  return false;  
}else if(password.length<4){  
  alert("Password must be at least 4 characters long.");  
  return false;  
  }  
}  
</script>  
    </body>
    </div>
    <hr/>
<footer>
    <?php
    include 'Controller/Footer.php'
    ?>
</footer>
</body>

</head>
</html>
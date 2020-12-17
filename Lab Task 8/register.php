<?php include('server.php') ?>
<html>
<body>
	<head>
	<center>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
       <table border=0 width="1500px" height="50px"/>
 <tr> 
        <left><h1 class="head1"><i><b>BusTicket.com<br/> </b></i></h1></left>
		<td colspan=2><center><img src="Plogo.JPG" width="800px" height="300px"> </center>
		          
		          <right>
<p class="hp2"> <b>Already have an Account?</b>
<a href='login.php'>Log in. |</a></p>
</right>
		 </td>

       	 </table>
		</center>
    </head>

<div class ="tbl1">
<body  style = "background: url(seat1.jpg) ; background-size: 50%;">
      <div>
  	<h2 class="head2">Register</h2>
  </div>
	<form name="myform" method="post" action="register.php" onsubmit="return validateform()">
	<?php include('errors.php'); ?>
	  <div class="inputb">
  	<div>
  	  <label><b>User Name:</b></label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div><br/>
  	<div>
  	  <label><b>Email:</b></label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div><br/>
  	<div>
  	  <label><b>Password:</b></label>
  	  <input type="password" name="password_1">
  	</div><br/>
  	<div>
  	  <label><b>Confirm password:</b></label>
  	  <input type="password" name="password_2">
  	</div><hr/>
  	<div>
  	  <button class= "btn" type="submit" name="reg_user">Register</button>
  	</div>
  	<p>
  		<b>Already a member? <a href="login.php">Log in</a>
	  </p>
</div>
  </form>
  <script>
  function validateform(){  
var username=document.myform.username.value;  
var email=document.myform.email.value; 
var password_1=document.myform.password_1.value; 
var password_2=document.myform.password_2.value;  
  
if (username==null || username==""){  
  alert("Username required");  
  return false;  
}
else if(email==null || email==""){ 
   alert("Invalid Email Adress.");  
  return false;  
  }else if(password_1.length<4){  
  alert("Password must be at least 4 characters long.");  
  return false;  
  }else if(password_1 != password_2){  
  alert("Password & Confirm Password must be same!");  
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
<?php include('server.php') ?>
<html>
<body>
	<head>
	<center>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
       <table border=1 width="1500px" height="50px"/>
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
     <table style = "width:2500px; height:300px;">
     
     <div>
  	<h2 class="head2">Register</h2>
  </div>
	<form method="post" action="register.php">
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
    </table>
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
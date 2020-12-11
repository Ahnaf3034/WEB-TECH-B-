<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <div>
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div>
  		<label><b>Username:</b></label>
  		<input type="text" name="username" >
  	</div>
  	<div>
  		<label><b>Password:</b></label>
  		<input type="password" name="password">
  	</div>
	  <div>
	  <p><b><input type="checkbox" name="remember">Remember Me</b></p>
	  </div>
  	<div>
  		<button type="submit" name="login_user">Login</button>
  	</div>
  	<p>
  		<b>New User? <a href="preg.php">Register</a></b>
  	</p>
  </form>
</body>
</html>
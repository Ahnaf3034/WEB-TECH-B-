<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <div>
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div>
  	  <label><b>Username:</b></label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div>
  	  <label><b>Email:</b></label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div>
  	  <label><b>Password:</b></label>
  	  <input type="password" name="password_1">
  	</div>
  	<div>
  	  <label><b>Confirm password:</b></label>
  	  <input type="password" name="password_2">
  	</div>
  	<div>
  	  <button type="submit" name="reg_user">Register</button>
  	</div>
  	<p>
  		<b>Already a member? <a href="pdashboard.php">Log in</a>
  	</p>
  </form>
</body>
</html>
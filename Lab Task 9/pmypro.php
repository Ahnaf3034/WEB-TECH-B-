<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<?php
    include 'Controller/Pheader.php'
    ?>
</head><hr/>
<div>
<body  style = "background: url(bus1.jpg) ; background-size: 50%;">
  <div class="tb">
            <ul>
                <p style="font-size: 20px;"><b> MANAGER</b></p>
                <hr/>
                <li class="li"><a href="pmypro.php">My Profile<a></li>
                <li class="li"><a href="pepro.php">Edit Profile</li>
                <li class="li"><a href="pcpass.php">Change Password</li>
                <li class="li"><a href="pbs.php">Bus Schedule</li>
                <li class="li"><a href="pubs.php">Update Bus Schedule</li>
                <li class="li"><a href="psc.php">Search Ticket</li>
                <li class="li"><a href="pcth.php">Check Transaction History</li>
                <li class="li"><a href="ps.php">Support</li>
                <li class="li"><a href="index.php">Log Out</a></li>
            </ul>
        </div>
        
     <fieldset class="fs2">
        <form>
        <?php  if (isset($_SESSION['username'])) : ?>
    	<h1><b><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></b></h1>
    <?php endif ?>
        <h2><b> Have A Nice Day! </b><h2>
        </fieldset>
        </div>
     <script>
      alert("You Are Now Logged in !!");
    </script>
    </body>
    </div>
    <hr/>
<footer>
    <?php
    include 'Controller/Footer.php'
    ?>
</footer>
</html>
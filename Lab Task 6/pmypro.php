<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: pdashboard.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: pdashboard.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'Controller/Pheader.php'
    ?>
</head><hr/>
<style>
.cls1{
    background-color: orange;
  color: black;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;

}
</style>
<div class ="cls1">
<body  style = "background: url(bus1.jpg) ; background-size: 50%;">
     <table style = "width:2500px; height:300px;">
     <tr>
      <th></th>
      <th colspan = "2"> </th>
      </tr>
      <tr>
      <td>
        <div>
            <ul>
                <p style="font-size: 20px;"><b> MANAGER</b></p>
                <hr/>
                <li><a href="pmypro.php">My Profile.<a></li>
                <li><a href="pepro.php">Edit Profile</li>
                <li><a href="pcpass.php">Change Password</li>
                <li><a href="pubs.php">Update Bus Schedule</li>
                <li><a href="psc.php">Search Ticket</li>
                <li><a href="pcth.php">Check Transaction History</li>
                <li><a href="index.php">Log Out</a></li>
            </ul>
        </div></td>
        
        <td><div style = "width:500px">
        <fieldset style = "height:200px">
        <form>
        <?php  if (isset($_SESSION['username'])) : ?>
    	<h1><b><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></b></h1>
    <?php endif ?>
        <h2><b> Have A Nice Day! </b><h2>
        </fieldset>
        </div></td>
        </tr>

    </table>
    </body>
    </div>
    <hr/>
<footer>
    <?php
    include 'Controller/Footer.php'
    ?>
</footer>
</html>
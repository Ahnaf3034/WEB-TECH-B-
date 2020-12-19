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
                <li class="li"><a href="pmypro.php">My Profile.<a></li>
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


 <fieldset class="fs3">       
 <div>
 <h1><b>CHANGE PASSWORD:</h1>
 </div>
<form name="myform" method="post" action="pcpass.php" onsubmit="return validateform()">
 <div class="inputb">
 <div>
 Current Password :<input type="text" name="password_1">
 </div></br>
 <div>
 New Password :<input type="text" name="password_2">
 </div><br/>
 <div>
 Retype New Password :<input type="text" name="password_3">
 </div><br/><hr/>
 <div>
 <button class= "btn" type="submit" name="cng_pass">UPDATE</button>
</div>
  </div>
  </form>
 </fieldset>
 <script>
  function validateform(){  
var password_1=document.myform.password_1.value; 
var password_2=document.myform.password_2.value;  
var password_3=document.myform.password_3.value; 
  
if(password_1 == "null" || password_1 == ""){  
  alert("Enter Your Current Password.");  
  return false;  
  }else if(password_1 == password_2){  
  alert("Current Password & New Password should not be same!");  
  return false;  
  } else if(password_2 != password_3){  
  alert("New Password & Confirm Password must be same!");  
  return false;  
  }
}  
</script>  
    </body>
    <hr/>
<footer>
    <?php
    include 'Controller/Footer.php'
    ?>
</footer>
</html>
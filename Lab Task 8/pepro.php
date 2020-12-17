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
                <li class="li"><a href="pubs.php">Update Bus Schedule</li>
                <li class="li"><a href="psc.php">Search Ticket</li>
                <li class="li"><a href="pcth.php">Check Transaction History</li>
                <li class="li"><a href="index.php">Log Out</a></li>
            </ul>
        </div>
        
<fieldset class="fs2">       
 <div>
 <h1><b>EDIT PROFILE :</h1>
 </div>
<form name="myform" method="post" action="pepro.php" onsubmit="return validateform()">
 <div class="inputb">
                   <b>User Name:</b> <input type="text" name="username" size="20px" placeholder="Ahnaf" ><br/>
                  <b>Email:</b> <input type="text" name="email" size="20px" placeholder="ahnaf@gmail.com" >i<br/>
                  <b>Contact No.:</b> <input type="text" name="cno" size="20px" placeholder="0171112255" ><br/>
                  <b>Address:</b> <input type="text" name="addr" size="20px" placeholder="Khilkhet,Dhaka" ><br/><hr/>
       </div>
                <div>
                <button class= "btn" type="submit" name="updatepro">UPDATE</button>
                </div>
        </div>
      </form>
    </fieldset>
    <script>
  function validateform(){  
var username=document.myform.username.value;  
var email=document.myform.email.value; 
var cno=document.myform.cno.value; 
var addr=document.myform.addr.value;  
  
if (username == "null" || username == ""){  
  alert("Username required");  
  return false;  
}
else if(email == "null" || email == ""){ 
   alert("Invalid Email Adress.");  
  return false;  
  }else if(cno == "null" || cno.length<11){ 
   alert("Invalid Contact No.");  
  return false;  
  }else if(addr == "null" || addr == ""){ 
   alert("Enter Your Address.");  
  return false;  
  }
}  
</script>  

</body>
<footer>
    <?php
    include 'Controller/Footer.php'
    ?>
</footer>
</html>




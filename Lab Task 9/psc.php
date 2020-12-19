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
<body  style = "background: url(seat1.jpg) ; background-size: 50%;">
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
        
<fieldset class="fs2">       
 <div>
 <h1><b>SEARCH TICKET:</h1>
 </div>
<form name="myform" method="post" action="psc.php" onsubmit="return validateform()">
 <div class="inputb">
 <div>
        <b>Passanger Name:</b> <input type="text" name="pname" size="20px" placeholder="Ahnaf" > </div>
    <br>
    <div> <b>Bus Name:</b> <input type="text" name="busname" size="20px" placeholder="Hanif" > </div>
                <br>
        <hr/>
        <button class="btn" type="submit">Search</button>

        </div>
        </form>
    </fieldset>
    <script>
  function validateform(){  
var pname=document.myform.pname.value; 
var busname=document.myform.busname.value; 


if(pname == "null" || pname == ""){  
  alert("Enter A Passanger Name.");  
  return false;  
  } 
else if(busname == "null" || busname == ""){  
  alert("Enter A Bus Name.");  
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
</html>
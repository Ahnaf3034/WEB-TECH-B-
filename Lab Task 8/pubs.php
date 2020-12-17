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
<body  style = "background: url(bus2.jpg) ; background-size: 50%;">     
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
        
<fieldset class="fs3">       
 <div>
 <h1><b>UPDATE BUS SCHEDULE:</h1>
 </div>
<form name="myform" method="post" action="pubs.php" onsubmit="return validateform()">
 <div class="inputb">
    <div>            
    <b>Bus Name:</b> <input type="text" name="busname" placeholder="Hanif" >
    </div><br/>
    <div>
    <b>Bus no.:</b> <input type="text" name="busno" placeholder="Dh-M-11-1111" >
    </div><br/>
    <div>
     <b>Bus Time:</b> <input type="text" name="bustime" placeholder="12:00" >
     </div><br/><hr/>
                
     <div>
 <button class= "btn" type="submit" name="ubs">UPDATE</button>
</div>
    </div>
    </form>
    </fieldset>
    <script>
  function validateform(){  
var busname=document.myform.busname.value; 
var busno=document.myform.busno.value;  
var bustime=document.myform.bustime.value; 
  
if(busname == "null" || busname == ""){  
  alert("Enter A Bus Name.");  
  return false;  
  }else if(busno == "null" || busno == ""){  
  alert("Enter The Bus Number");  
  return false;  
  }else if(bustime == "null" || bustime == ""){  
  alert("Enter The Bus Time");  
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
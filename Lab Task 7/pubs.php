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
        
       <form>
       <fieldset class="fs3">
                <h1><b>UPDATE BUS SCHEDULE</b></h1>

                <div class="inputb">
                 
                <b>Bus Name:</b> <input type="text" name="busname" placeholder="Hanif" ><br/>
                <b>Bus no.:</b> <input type="text" name="busno" placeholder="Dh-M-11-1111" ><br/>
                <b>Bus Time:</b> <input type="text" name="bustime" placeholder="12:00" ><br/><hr/>
                
                <button class="btn" type="submit">Update</button>
            </fieldset>
        </form>
        </div>
    </body>
    </div>
    <hr/>
 <?php
 $busname = $busno = $bustime = "";
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {


    if(!empty($_POST['busname']))
	               { 
                        $busname =validate($_POST["busname"]);
	                } 
	            else
	                {
	    	           echo "Please Enter A Busname"."<br/>"; 
                    }
                
     if(!empty($_POST['busno']))
                    { 
                         $busno =validate($_POST["busno"]);
                     } 
                 else
                     {
                        echo "Please Enter A Bus Number"."<br/>"; 
                     }
     if(!empty($_POST['bustime']))
                     { 
                          $bustime =validate($_POST["bustime"]);
                      } 
                  else
                      {
                         echo "Please Enter The Bus Time"."<br/>"; 
                      }
    
 }

 function validate($data){
     $data = trim($data);
     $data = stripcslashes($data);
     $data = htmlspecialchars($data);
     return $data;
 }
 ?>
<footer>
    <?php
    include 'Controller/Footer.php'
    ?>
</footer>
</html>
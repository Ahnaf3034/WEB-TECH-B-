<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'Controller/Pheader.php'
    ?>
</head><hr/>
<style>
.cls1{
    background-color:#3FFF00;
  color: black;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;

}
</style>
<div class ="cls1">
<body  style = "background: url(seat1.jpg) ; background-size: 50%;">
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
       <form>
       <fieldset style="border: black 4px solid;">
                <legend><b>SEARCH TICKET</b></legend>

                <div>
                 
                   <b>Passanger Name:</b> <input type="text" name="pname" size="20px" placeholder="Ahnaf" ><br>
                  <b>Bus Name:</b> <input type="text" name="busname" size="20px" placeholder="Hanif" ><br>
                  <b>Bus no.:</b> <input type="text" name="busno" size="20px" placeholder="Dh-M-11-1111" ><br>
                  <b>Bus Time:</b> <input type="text" name="bustime" size="20px" placeholder="12:00" ><br>
                

        
                <button type="submit">Search</button>
            </fieldset>
        </form>
        </div></td>
        </tr>

    </table>
    </body>
    </div>
    <hr/>
    <?php
 $pname = $busname = $busno = $bustime = "";
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    if(!empty($_POST['pname']))
	               { 
                        $pname =validate($_POST["pname"]);
	                } 
	            else
	                {
	    	           echo "Please Enter The Passanger Name"."<br/>"; 
                    }

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
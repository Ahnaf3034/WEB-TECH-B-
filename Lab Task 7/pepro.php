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
        
       <form>
       <fieldset class="fs2">
                <div>
                   <h1>Edit Profile</h1>
                   <div class="inputb">
                   <b>Name:</b> <input type="text" name="name" size="20px" placeholder="Ahnaf" ><br/>
                  <b>Email:</b> <input type="text" name="email" size="20px" placeholder="ahnaf@gmail.com" >i<br/>
                  <b>Contact No.:</b> <input type="text" name="cno" size="20px" placeholder="0171112255" ><br/>
                  <b>Address:</b> <input type="text" name="address" size="20px" placeholder="Khilkhet,Dhaka" ><br/>

                    <div><b>
                
                   Gender: <input type="radio" name="gender" value="Male">Male
                  

                    <input type="radio" name="gender" value="Female">Female
               

                    <input type="radio" name="gender" value="Other">Other
                   
                    </b>
                    </div>

                    <b>Date Of Birth</b>: <input type="text" name="dob" size="20px" placeholder="01/01/1990" ><br/>

                </div>
                <button class="btn" type="submit">Update</button>
            </fieldset>
        </form>
        </div>
    </body>
    </div>
    <hr/>
<?php
 $name = $email = $cno = $address = $gender = $dob = "";
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    if(!empty($_POST['name']))
	{ 
        if(($_POST['name']) == "A-Z" || "a-z")
            {

		        if(strlen($_POST['name'])>=2)
		            {
                        $name =validate($_POST["name"]);
	                } 
	            else
	                {
	    	           echo " At Least Two Words needed"."<br/>"; 
                    }
                }
		else
		{
			echo " Must Start With a Letter"."<br/>";
        }
    }
	else
	{
		echo " Name Field Required"."<br/>";
    }

    if(!empty($_POST['email']))
	{
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	       {
            $email =validate($_POST["email"]);
	
           } 
        else 
           {
                echo " Invalid email address"."<br/>";
           }		
	}
	else
	{
		echo " Email Field Required"."<br/>";
    }
    if(!empty($_POST['cno']))
	{ 
        if(($_POST['cno']) == "0-9")
            {

		        if(strlen($_POST['cno'])>=11)
		            {
                        $cno =validate($_POST["cno"]);
	                } 
	            else
	                {
	    	           echo " Invalid Number"."<br/>"; 
                    }
            }
		else
		{
			echo "Invalid Number"."<br/>";
        }
    }

    if(!empty($_POST['address']))
	               { 
                        $address =validate($_POST["address"]);
	                } 
	            else
	                {
	    	           echo " Invalid Address"."<br/>"; 
                    }
                
	



     if(!isset($_POST['gender']))
                    { 
                       echo "At least One must be selected."."<br/>"; 
                    } 
                    else
                    {
                        $gender =validate($_POST["gender"]);
                
                    }

     if(!empty($_POST['dd']))
                    { 
                        if(!empty($_POST['mm']))
                         {
                             if(!empty($_POST['yyyy']))
                             {
                                $dd =validate($_POST["dd"]);
                                $mm =validate($_POST["mm"]);
                                $yyyy =validate($_POST["yyyy"]);
                               if ( checkdate( $mm, $dd, $yyyy ) === false )
                               {
                                     echo "Invalid DOB" ;
                               }
                               else
                               {
                                echo " ";
                               }
                                 
                             }
                             else
                           {
                               echo " DOB Required"."<br/>";
                           }
                
                         }
                         else
                         {
                              echo " DOB Required"."<br/>";
                         }
                   
                    } 
                    else
                   {
                       echo " DOB Required"."<br/>";
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
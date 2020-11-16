<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration.</title>
    <h1 style="color: green;"><b>Ahnaf Foundation.</b></h1>
    <p style = "text-align:right">
        <a href = "Phome.php">Home |</a>
        <a href = "Log in.php">Login |</a>
        <a href = "Registration1.php">Registration </a>
        </p>
        <hr/>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
<fieldset>
 <legend><b>REGISTRATION</legend>
 Name: <input type="text" name="name"><hr/>
 Email: <input type="text" name="email">i<hr/>
 User Name: <input type="text" name="uname"><hr/>
 Password: <input type="text" name="password"><hr/>
 Confirm Password: <input type="text" name="cpassword"><hr/>
 <fieldset>
 <legend><b>GENDER:</legend> <input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female <input type="radio" name="gender" value="Other">Other<hr/>
 </fieldset>
 <fieldset>
 <legend><b>DATE OF BIRTH:</legend> <input type="text" name="dd"> / <input type="text" name="mm"> / <input type="text" name="yyyy"><hr/>
 </fieldset><hr/>
  <button type="submit">Submit</button>
  <button type="reset">Reset</button>
  
  
 </fieldset>
 </form>
 

 <?php
 $name = $email = $uname = $password = $cpassword = $gender = $dob = "";
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
    if(!empty($_POST['uname']))
	{ 
        if(($_POST['uname']) == "A-Z" || "a-z")
            {

		        if(strlen($_POST['uname'])>=2)
		            {
                        $name =validate($_POST["uname"]);
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

    if(!empty($_POST['password']))
	{ 
        if(($_POST['password']) == "@" || "#" || "%" || "$" )
            {

		        if(strlen($_POST['password'])>=8)
		            {
                        $password =validate($_POST["password"]);
	                } 
	            else
	                {
	    	           echo " At Least 8 characters needed"."<br/>"; 
                    }
                }
		else
		{
			echo " At Least 1 special characters needed"."<br/>";
        }
    }
	else
	{
		echo " Password Field Required"."<br/>";
    }

    if(($_POST['cpassword']) == ($_POST['password']) )
	                {

                        $password =validate($_POST["password"]);
	                } 
	            else
	                {
	    	           echo "Password & Confirm password should be same."."<br/>"; 
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


</body>
<footer>
    <p style = "text-align:center";>Copyright: Ahnaf Rashid&copy;2020 </p>
</footer>
</html>
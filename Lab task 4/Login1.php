<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In!</title>
    <h1 style="color: green;"><b>Ahnaf Foundation.</b></h1>
    <p style = "text-align:right">
        <a href = "Phome.php">Home |</a>
        <a href = "Log in.php">Login |</a>
        <a href = "Registration.php">Registration </a>
        </p>
        <hr/>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
<fieldset>
 <legend><b>Log In</legend>
 User Name: <input type="text" name="name"><br/>
 Password: <input type="text" name="password"><br/><hr/>
 <p><input type="checkbox" name="remember">Remember Me</p>
  <button type="submit">Submit</button>
 <a href = "Registration.php"><u>Forgot Password?</u></a>
  
 </fieldset>
 </form>
 

 <?php
 $name = $password = "";
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
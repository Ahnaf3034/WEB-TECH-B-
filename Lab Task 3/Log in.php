<!DOCTYPE html>
<head>
   
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

 <?php
 echo "Name: ". $name;
 echo "<br/>";
 echo "Password: ".$password;
 ?>
    
</body>
</html>
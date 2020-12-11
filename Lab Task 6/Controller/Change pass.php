<!DOCTYPE html>
<head>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
<fieldset style="border: green 4px solid;">
 <legend><b>CHANGE PASSWORD:</legend> 
 Current Password :<input type="text" name="cpassword"></br>
 New Password :<input type="text" name="npassword"><br/>
 Retype New Password :<input type="text" name="rpassword"><br/><hr/>
  <button type="submit">Submit<?button>
 </fieldset>
 </form>
 

 <?php
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    if(($_POST['cpassword']) != ($_POST['npassword']) )
	{ 
        if(($_POST['npassword']) == ($_POST['rpassword']) )
        
                    {

                        $rpassword =validate($_POST["rpassword"]);
	                } 
	            else
	                {
	    	           echo "New password & Retype new password should be same."."<br/>"; 
                    }
     }
                
		else
		{
			echo "Current Password & New Password should not be same."."<br/>";
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
</html>
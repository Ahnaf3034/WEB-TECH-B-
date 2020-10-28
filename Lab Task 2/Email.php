<!DOCTYPE html>
<head>
   <b> Php Validation. </b>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
<fieldset>
 <legend><b>EMAIL:</legend> <input type="text" name="email"><hr/>
  <button type="submit">Submit<?button>
 </fieldset>
 </form>

 <?php
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
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
     
 }

 function validate($data){
     $data = trim($data);
     $data = stripcslashes($data);
     $data = htmlspecialchars($data);
     return $data;
 }
 ?>

 <?php
 echo "Email: ". $email;
 ?>
    
</body>
</html>
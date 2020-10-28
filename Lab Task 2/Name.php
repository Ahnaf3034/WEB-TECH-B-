<!DOCTYPE html>
<head>
   <b> Php Validation. </b>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
<fieldset>
 <legend><b>NAME:</legend> <input type="text" name="name"><hr/>
  <button type="submit">Submit<?button>
 </fieldset>
 </form>
 

 <?php
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
 ?>
    
</body>
</html>
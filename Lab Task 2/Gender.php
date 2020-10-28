<!DOCTYPE html>
<head>
   <b> Php Validation. </b>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
<fieldset>
 <legend><b>GENDER:</legend> <input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female <input type="radio" name="gender" value="Other">Other<hr/>
  <button type="submit">Submit<?button>
 </fieldset>
 </form>

 <?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!isset($_POST['gender']))
    { 
       echo "At least One must be selected."."<br/>"; 
    } 
    else
    {
        $gender =validate($_POST["gender"]);

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
 echo "Gender: ". $gender;
 ?>
    
</body>
</html>
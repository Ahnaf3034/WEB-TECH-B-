<!DOCTYPE html>
<head>
   <b> Php Validation. </b>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
<fieldset>
 <legend><b>BLOOD GROUP:</legend> <select name="blood">
        <option> </option>
        <option>A+</option>
        <option>A-</option>
        <option>AB+</option>
        <option>B+</option>
        <option>B-</option>
        <option>AB-</option>
        <option>O+</option>
        <option>O-</option>
</select><hr/>
  <button type="submit">Submit</button>
 </fieldset>
 </form>
 

 <?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST['blood'] == "")
    {
    echo "Invalid Blood Group"."<br/>";
    }
    else
    {
        $blood =validate($_POST["blood"]);
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
 echo "Blood Group: ". $blood;
 ?>
    
</body>
</html>
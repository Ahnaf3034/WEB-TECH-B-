<!DOCTYPE html>
<head>
   <b> Php Validation. </b>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
<fieldset>
 <legend><b>DEGREE:</legend> <input type="checkbox" name="degree[1]" value="SSC">SSC 
 <input type="checkbox" name="degree[2]" value="HSC">HSC
 <input type="checkbox" name="degree[3]" value="BSc">BSc
 <input type="checkbox" name="degree[4]" value="MSc">MSc<hr/>
  <button type="submit">Submit<?button>
 </fieldset>
 </form>

 <?php
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    if(!isset($_POST['submit']))
    $checkeddegree = 0;
    $values = $_POST['degree'];
    $checkeddegree = count($values);
    if($checkeddegree < 2)
    { 
       echo "At least Two must be selected"."<br/>"; 
    } 
    else
    {
     if(isset($_POST['submit'])){
        $degree = $_POST['degree'];
        echo "Degree: ";

        foreach($degree as $key=>$value){
         echo "Degree: ". "$degree[1]-". "$degree[2]-". "$degree[3]-". "$degree[4]";
        }

     }
        
       
    }

 }
  
 

 function validate($data){
     $data = trim($data);
     $data = stripcslashes($data);
     $data = htmlspecialchars($data);
     return $data;
 }

 //<?php
 //echo "Degree: ". "$degree[1]-". "$degree[2]-". "$degree[3]-". "$degree[4]";
// ?>


    
</body>
</html>
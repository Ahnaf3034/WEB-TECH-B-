<!DOCTYPE html>
<head>
   <b> Php Validation. </b>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
<fieldset>
 <legend><b>DATE OF BIRTH:</legend> <input type="text" name="dd"> / <input type="text" name="mm"> / <input type="text" name="yyyy"><hr/>
  <button type="submit">Submit<?button>
 </fieldset>
 </form>

 <?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
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
                   echo "DOB: ".$dd."/".$mm."/".$yyyy."<br/>";
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
</html>
<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
<fieldset>
<div class="inputb">
 <b>Select Date: <input type="text" name="dd"> / <input type="text" name="mm"> / <input type="text" name="yyyy"></b><hr/>
  <button class="btn" type="submit">Search</button>
</div>
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
                     echo "Invalid Date" ;
               }
               else
               {
                   echo "The Date is: ".$dd."/".$mm."/".$yyyy."<br/>";
                   echo "No History"."<br/>";
               }
                 
             }
             else
           {
               echo " Date Required"."<br/>";
           }

         }
         else
         {
              echo " Date Required"."<br/>";
         }
   
    } 
    else
   {
       echo "Please Enter A Date."."<br/>";
   }
    
 }

 function validate($data){
     $data = trim($data);
     $data = stripcslashes($data);
     $data = htmlspecialchars($data);
     return $data;
 }
 ?>
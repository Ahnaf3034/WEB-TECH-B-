<!DOCTYPE html>
<html>
<head>
</head>
    <bodY>
        <form action = "?" method = "POST" enctype = "multipart/form-data">
        <fieldset>
     <legend><b>PROFILE PICTURE:</legend> 
     <p><input type="file" name="myfile"></br>
   <hr/>
  <button type="submit">Upload<?button>
 </fieldset>
 </form>

 <?php
 if(isset($_POST['submit']))
 {  
    $fileName = $_FILES['myfile']['name'];
    $fileTmpN = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileSize = $_FILES['myfile']['size'];
    $ext = pathinfo($fileName,PATHINFO_EXTENSION);

    

    if($filesize < 4000000){

        if($ext == 'jpg' or $ext == 'jpeg')
        {
            move_uploaded_file($fileTmpN, $fileName);
        }
        else{
            echo "Please upload a jpg or jpeg file ";
        }

    }
    else{
        echo "File is too large!";
    }
        
}

 ?>

    </bodY>
</html>
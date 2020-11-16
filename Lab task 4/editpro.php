<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <h1 style="color: green;"><b>Ahnaf Foundation.</b></h1>
    <p style = "text-align:right">
    Logged in As.
        <a href = "Bob.php">Bob |</a>
        <a href = "Phome.php">Log Out</a>
        </p>
        <hr/>
</head>
<body>
     <table>
     <tr>
      <th></th>
      <th colspan = "2"> </th>
      </tr>
      <tr>
      <td>
        <div  style = "width:500px">
            <ul>
                <p style="font-size: 20px;"><b> ACCOOUNT</b></p>
                <hr/>
                <li><a href="Dashboard.php">Dashboard<a></li>
                <li><a href="Bob.php">View Profie</li>
                <li><a href="editpro.php">Edit Profile</li>
                <li><a href="pro pic1.php">Change Profile Picture</li>
                <li><a href="Change pass1.php">Change Password</li>
                <li><a href="Phome.php">Log Out</a></li>
            </ul>
        </div></td>
        
        <td><div style = "width:500px">
        <form>
            <fieldset style="border: black 2px solid;">
                <legend><b>EDIT PROFILE</b></legend>

                <div>
                 
                   <b>Name:</b> <input type="text" name="name" size="20px" placeholder="Bob" ><br>
                  <b>Email:</b> <input type="text" name="email" size="20px" placeholder="bob@aiub.edu" >i<br>

                    <div><b>
                
                   Gender: <input type="radio" name="gender" value="Male">Male
                  

                    <input type="radio" name="gender" value="Female">Female
               

                    <input type="radio" name="gender" value="Other">Other
                   
                    </b>
                    </div>

                    <b>Date Of Birth</b>: <input type="text" name="dob" size="20px" placeholder="19/09/1998" ><br>

                </div><br>
                <input class="button" type="submit" value="Submit" name="submit">
            </fieldset>
        </form>
        </div></td>
        </tr>

    </table>
    </body>
    <hr/>
<footer>
    <p style = "text-align:center";>Copyright: Ahnaf Rashid&copy;2020 </p>
</footer>
</html>
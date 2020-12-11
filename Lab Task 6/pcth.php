<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'Controller/Pheader.php'
    ?>
</head><hr/>
<style>
.cls1{
    background-color: cyan;
  color: black;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;

}
</style>
<div class ="cls1">
<body  style = "background: url(seat1.jpg) ; background-size: 50%;">
     <table style = "width:2500px; height:300px;">
     <tr>
      <th></th>
      <th colspan = "2"> </th>
      </tr>
      <tr>
      <td>
        <div>
            <ul>
                <p style="font-size: 20px;"><b> MANAGER</b></p>
                <hr/>
                <li><a href="pmypro.php">My Profile.<a></li>
                <li><a href="pepro.php">Edit Profile</li>
                <li><a href="pcpass.php">Change Password</li>
                <li><a href="pubs.php">Update Bus Schedule</li>
                <li><a href="psc.php">Search Ticket</li>
                <li><a href="pcth.php">Check Transaction History</li>
                <li><a href="index.php">Log Out</a></li>
            </ul>
        </div></td>
        
        <td><div style = "width:500px">
        <fieldset style = "height:200px">
        <legend><b>TRANSACTION HISTORY</b></legend>
        <?php
        require 'Controller/tsh.php'
        ?>
        </fieldset>
        </div></td>
        </tr>

    </table>
    </body>
    </div>
    <hr/>
<footer>
    <?php
    include 'Controller/Footer.php'
    ?>
</footer>
</html>
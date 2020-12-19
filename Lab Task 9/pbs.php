<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'Controller/Pheader.php'
    ?>
 <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head><hr/>
<div>
<body  style = "background: url(seat1.jpg) ; background-size: 50%;">
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>

<div class="tb">
            <ul>
                <p style="font-size: 20px;"><b> MANAGER</b></p>
                <hr/>
                <li class="li"><a href="pmypro.php">My Profile.<a></li>
                <li class="li"><a href="pepro.php">Edit Profile</li>
                <li class="li"><a href="pcpass.php">Change Password</li>
                <li class="li"><a href="pbs.php">Bus Schedule</li>
                <li class="li"><a href="pubs.php">Update Bus Schedule</li>
                <li class="li"><a href="psc.php">Search Ticket</li>
                <li class="li"><a href="pcth.php">Check Transaction History</li>
                <li class="li"><a href="ps.php">Support</li>
                <li class="li"><a href="index.php">Log Out</a></li>
            </ul>
        </div>
        
        <fieldset class="fs1">
        <h1><b>BUS SCHEDULE</b></h1>
        <button class="btn" type="button" onclick="loadDoc()">SEE SCHEDULE</button>
<br><br>
<table id="demo"></table>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "bs.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Bus Name</th><th>Bus No.</th><th>Bus Time.</th><th>Destination</th></tr>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("BNAME")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("BN")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("BT")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("DT")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>
        </fieldset>
        </div>
    </body>
    </div>
    <hr/>
<footer>
    <?php
    include 'Controller/Footer.php'
    ?>
</footer>
</html>
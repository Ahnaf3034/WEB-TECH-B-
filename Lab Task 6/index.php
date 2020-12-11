<!DOCTYPE html>
<html>
<style>
.cls1{
    background-color: cyan;
  color: white;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;

}
</style>
<head>
	<center>
       <table border=1 width="1500px" height="50px"/>
 <tr> 
        <left><h1 style="color: #FFFF00;"><i><b>BusTicket.com<br/> </b></i></h1></left>
		<td colspan=2><center><img src="Plogo.JPG" width="800px" height="300px"> </center>
		          
		          <right>
<p style = "text-align:right; color:#FFFFFF; background-color:black;"> <b>Already have an Account?</b>
<a href='pdashboard.php'>Log in. |</a></p>
</right>
		 </td>

       	 </table>
		</center>
    </head>
<body style = "background: url(bus2.jpg) ; background-size: 50%;">


<div class=cls1>
<table>
<tr>
<td><div style = "width:500px">
<p><b><h1 style = "color:black">Welcome Back!</h1></b></p>
<p><b><a href='pdashboard.php'>Log In.</a></b></p>
<p><b><a href='preg.php'>Resigtration.</a></b></p>
</div></td>
</tr>
</table>
</div>
<footer>
    <?php
    include 'Controller/Footer.php'
    ?>
</footer>
</body>
</html>
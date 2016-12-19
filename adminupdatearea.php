 <?php
       session_start();
       include 'makeconnection.inc.php';
     
       if(isset($_POST['submit']))
        {
           $sql= "insert into areainfo (pincode,mystream,boiler,bacteria,contamination) values ('$_POST[pincode]','$_POST[stream]','$_POST[boiler]','$_POST[bacteria]','$_POST[contamination]')";
		   mysql_query($sql,$con);
		   $_SESSION["pincode"] = $_POST['pincode'];
		}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="adminlayout.css" rel="stylesheet" type="text/css" />
<title>ENTERED VALUES</title>

<style>
#styleme
{
	border:2px solid black;
	margin-top:50px;
	margin-left:40px;
	text-align:center;
}
</style>
</head>



<body>
 <div id="logo">
  <img src="logo.jpg" />
 </div>
  <div id="menu">
   <nav>
     <ul>
       <li><a href="residentlogin.php">City Residents</a></li>
       <li><a href="visitor.php">Visitors</a></li>
       <li><a href="employee.html">City Employees</a></li>
       <li><a href="feedback_form.html">Feedback</a></li>
       <li><a href="contactus.html">Contact Us</a></li>
	    <li><a href="FAQs.html">FAQs</a></li>
     </ul>
    </nav>
  </div>
  <div id="styleme" class="box6" style="margin-top:100px;">
     <h1 style="text-align:center;">Inserted values are:</h1>
	<h3 class="highlighted"> PINCODE: 
	<?php 	
    $sql="select pincode from areainfo where pincode='$_SESSION[pincode]'";
	$result=mysql_query($sql,$con);
	$varray=mysql_fetch_array($result);
	echo $varray[0];
	?></h3> 
	<h3 class="highlighted"> STREAM: 
	<?php 	
    $sql="select mystream from areainfo where pincode='$_SESSION[pincode]'";
	$result=mysql_query($sql,$con);
	$varray=mysql_fetch_array($result);
	echo $varray[0];
	?></h3>
	<h3 class="highlighted"> BOILER ALERT:
	<?php 	
    $sql="select boiler from areainfo where pincode='$_SESSION[pincode]'";
	$result=mysql_query($sql,$con);
	$varray=mysql_fetch_array($result);
	echo $varray[0];
	?></h3>
	<h3 class="highlighted"> BACTERIA LEVEL:
	<?php 	
    $sql="select bacteria from areainfo where pincode='$_SESSION[pincode]'";
	$result=mysql_query($sql,$con);
	$varray=mysql_fetch_array($result);
	echo $varray[0];
	?></h3>
	<h3 class="highlighted"> CONTAMINATION LEVEL:
	<?php 	
    $sql="select contamination from areainfo where pincode='$_SESSION[pincode]'";
	$result=mysql_query($sql,$con);
	$varray=mysql_fetch_array($result);
	echo $varray[0];
	?></h3>;
  </div>
  
  </body>
 </html>
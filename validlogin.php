<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="logtheuserin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scriptfile.js" ></script>
<title>User logged in</title>

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
  
  <div id="meat">
  <div id="contentleft" class="box6">
  <h1>Welcome! 
  <?php 	
    $sql="select name from users where userid='$_SESSION[curruser]'";
	$result=mysql_query($sql,$con);
	$varray=mysql_fetch_array($result);
	echo $varray[0];
	?>
  </h1>
       <section id="userinfo" class="highlighted">
	   Email: <?php 	
    $sql="select email from users where userid='$_SESSION[curruser]'";
	$result=mysql_query($sql,$con);
	$varray=mysql_fetch_array($result);
	echo $varray[0];
	?><br/><br/>
	   address:
	    <?php 	
    $sql="select address from users where userid='$_SESSION[curruser]'";
	$result=mysql_query($sql,$con);
	$varray=mysql_fetch_array($result);
	echo $varray[0];
	
	?><br/><br/>
	   pincode: <?php 	
    $sql="select pincode from users where userid='$_SESSION[curruser]'";
	$result=mysql_query($sql,$con);
	$varray=mysql_fetch_array($result);
	echo $varray[0];
	$_SESSION["pin"]=$varray[0];
	?><br/><br/>
	   i am a: <?php 	
    $sql="select sex from users where userid='$_SESSION[curruser]'";
	$result=mysql_query($sql,$con);
	$varray=mysql_fetch_array($result);
	echo $varray[0];
	?><br/><br/>
	   </section>
	   
	   <section id="userareainfo" style="margin-top:10px;" class="highlighted">
	   <h1>MY AREA INFO</h1>
	   MY STREAM:<?php 	
     $sql="select mystream from areainfo where pincode='$_SESSION[pin]'";
	 $result=mysql_query($sql,$con);
	 $varray=mysql_fetch_array($result);
	 echo $varray[0];
	?><br/>
	   BOILER:<?php 	
     $sql="select boiler from areainfo where pincode='$_SESSION[pin]'";
	 $result=mysql_query($sql,$con);
	 $varray=mysql_fetch_array($result);
	 echo $varray[0];
	?><br/>
	   CONTAMINATION:<?php 	
     $sql="select contamination from areainfo where pincode='$_SESSION[pin]'";
	 $result=mysql_query($sql,$con);
	 $varray=mysql_fetch_array($result);
	 echo $varray[0];
	?><br/>
	   BACTERIA:<?php 	
     $sql="select bacteria from areainfo where pincode='$_SESSION[pin]'";
	 $result=mysql_query($sql,$con);
	 $varray=mysql_fetch_array($result);
	 echo $varray[0];
	?><br/>
	   </section><br/><br/>
	   <input type="button" value="Pay My Bills" class="btn" onClick="document.location.href='paybill.php'">
  </div>
  
  <div id="contentright" class="box6" style="margin-top:">
<section>
<?php
echo "<table id=bill align=center >
<tr>
<th>bill NUMBER</th>
<th>bill  amount</th>
<th>pending amount</th>
<th>month</th>
</tr>";
$billdetails="select billno,billamount,pending,month from bill where userid='$_SESSION[curruser]' ";
$bill=mysql_query($billdetails,$con);
while($qarray=mysql_fetch_array($bill))
{
 
 echo "<tr>";
 echo "<td align=center width=100px>".$qarray[0]."</td>";
 echo "<td align=center width=100px>".$qarray[1]."</td>";
 echo "<td align=center width=100px>".$qarray[2]."</td>";
 echo "<td align=center width=100px>".$qarray[3]."</td>";
 echo "</tr>";
 
}
?></section>

</div>
  
 </div>

 
</body>
</html>


<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="admin_login_main.css" rel="stylesheet" type="text/css" />
<link href="logtheuserin.css" rel="stylesheet" type="text/css" />
<title>check feedback</title>

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

  
  <div id="center" class="box6" style="width:500px;">
     <?php
	 include 'makeconnection.inc.php';
$feedback="select userid,type,feedback from feedback;";
$feed=mysql_query($feedback,$con);
echo "<table id=bill align=center border=1>
<tr>
<th>USER ID </th>
<th>TYPE </th>
<th>FEEDBACK RECIEVED</th>

</tr>";
while($qarray=mysql_fetch_array($feed))
{
 
 echo "<tr>";
 echo "<td align=center width=100px>".$qarray[0]."</td>";
 echo "<td align=center width=100px>".$qarray[1]."</td>";
 echo "<td align=center width=100px>".$qarray[2]."</td>";
}
	 ?>
  </div>
  </body>
</html>

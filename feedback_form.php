<?php
include 'makeconnection.inc.php';

if(isset($_POST['feedbacksub']))
{	
$sql=$sql="INSERT into feedback(userid,type,feedback)values('$_POST[userid]','$_POST[issue]','$_POST[feedback]')";
mysql_query($sql,$con);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<title>Feedback Page</title>
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
  <div id="contentleft_map">

  </div>
  
  <div id="contentright" >
 

  </div>
 </div>
  <hr />
 <div id="footer">
 </div>
 
</body>
</html>


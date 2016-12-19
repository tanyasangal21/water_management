<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scriptfile.js" ></script>
<title>VISITOR'S PAGE</title>
<style>


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
  <div id="restofpage">
  
      <form method="POST" action="visitorcopy.php" style="margin-top:140px;margin-left:300px;padding:10px;width:300px;" class="box6">
	  <h1>ENTER THE DETAILS BELOW</h1>
	   <input type="text"  placeholder="CITY NAME" name="city" class="styletextlongboxsignup" required><br /><br />
	   <input type="submit" name="submit" value="submit" class="btn">
	  </form>
  </div>
 </body>
</html>

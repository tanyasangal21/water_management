<?php?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="adminlayout.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
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
  <div id="left">
  <form method="POST" name="adminarea" action="adminupdatearea.php" >
  <fieldset>
  <legend>Update area info </legend>
  <input type="text" id="pincode" placeholder="Pincode" name="pincode" class="styletextlongboxsignup"><br /><br />
  <input type="text" id="stream" placeholder="Stream name" name="mystream" class="styletextlongboxsignup"><br /><br />
  <input type="text" id="floodlvl" placeholder="Current flood level" name="currflood" class="styletextlongboxsignup"><br /><br />
  <input type="text" id="boiler" placeholder="boiler" name="boiler" class="styletextlongboxsignup"><br /><br />
  <input type="text" id="bacterialvl" placeholder="Current bacteria level" name="bacteria" class="styletextlongboxsignup"><br /><br />
  <input type="text" id="contamination" placeholder="Current contamination level" name="contamination" class="styletextlongboxsignup"><br /><br />
  <input type="submit" name="submit" value="Submit" class="btn"><br/><br/>
  </fieldset>
  </form>
  </div>
  <div id="right"></div>
  </body>
</html>
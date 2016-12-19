<?php?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />

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
 
  <form id="adminupdate" style="margin-top:100px;margin-left:40px;width:350px;" action="adminupdatearea.php" class="box6" method="POST">
  <h1>Enter the area details</h1>
  <input type="text"  placeholder="Pincode" name="pincode" class="styletextlongboxsignup"><br /><br />
  <input type="text"  placeholder="Stream name" name="stream" class="styletextlongboxsignup"><br /><br />
  <input type="text"  placeholder="Current flood level" name="currflood" class="styletextlongboxsignup"><br /><br />
  <input type="text"  placeholder="boiler" name="boiler" class="styletextlongboxsignup"><br /><br />
  <input type="text"  placeholder="Current bacteria level" name="bacteria" class="styletextlongboxsignup"><br /><br />
  <input type="text"  placeholder="Current contamination level" name="contamination" class="styletextlongboxsignup"><br /><br />
  <input type="submit" name="submit" value="SUBMIT" class="btn"><br/><br/>
  <input type="button" name="updated" value="UPDATE EXISTING AREAS" class="btn" onClick="document.location.href='updateareafile.php'"><br/><br/>
 
  </form>
  </div>
 
  </body>
</html>
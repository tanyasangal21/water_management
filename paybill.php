<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="admin_login_main.css" rel="stylesheet" type="text/css" />
<title>BILL PAY</title>
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
<div class="box6" style="margin-top:100px;">
<form action="payed.php" method="POST">
<h1>BILL PAYMENT !</h1>
<input type="text" name="billno" placeholder="BIll NO" class="styletextlongboxsignup" required><br/><br/>
<input type="text" name="amount" placeholder="PAY AMOUNT" class="styletextlongboxsignup"><br/><br/>
 <input type="submit" name="payed" value="PAY BILL" class="btn"><br/><br/>
</form>
</div>
  </body>
</html>
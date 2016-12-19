<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scriptfile.js" ></script>
<title>RESIDENT LOGIN</title>

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
  
  <div id="contentright" class="box6" style="margin-top:20px;">
   <form method="POST" name="myform" action="logtheuserin.php" >
   <h1>Log In</h1>
   <input type="text" id="userid" placeholder="USER ID" name="userid" class="styletextlongboxsignup" autofocus required/><br /><br />
   <input type="password" id="password" placeholder="PASSWORD" name="password" class="styletextlongboxsignup"  required/><br /><br />
   <input type="password" id="confirmpass" placeholder="CONFIRM PASSWORD" name="confirmpass" class="styletextlongboxsignup"  required/><br /><br/>
   <input type="submit" name="submit" value="SUBMIT" class="btn"><br/><br/>
 
   </form>
  </div>
 </div>
  <hr />
 <div id="footer">

 </div>
 
</body>
</html>

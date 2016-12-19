<?php

include 'makeconnection.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="admin_login_main.css" rel="stylesheet" type="text/css" />
<title>RECIET</title>
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

  
  <div id="center" class="box6">
    <section class="highlighted">
	<h1>BILL RECIET !!!</h1>
     NAME:<?php 	
     $sql="select name from users where userid='$_SESSION[curruser]'";
	 $result=mysql_query($sql,$con);
	 $varray=mysql_fetch_array($result);
	 echo $varray[0];?></br></br>
	  RECIET NO:<?php 	
     $sql="select recietno from reciet where billno='$_SESSION[bill]'";
	 $result=mysql_query($sql,$con);
	 $varray=mysql_fetch_array($result);
	 echo $varray[0];?></br></br>
	 FOR BILL NO:<?php echo $_SESSION['bill'];
	 ?></br></br>
	 FOR MONTH:<?php 	
     $sql="select month from bill where billno='$_SESSION[bill]'";
	 $result=mysql_query($sql,$con);
	 $varray=mysql_fetch_array($result);
	 echo $varray[0];?></br></br>
	 AMOUNT PAYED:<?php 	
     $sql="select payed from reciet where billno='$_SESSION[bill]'";
	 $result=mysql_query($sql,$con);
	 $varray=mysql_fetch_array($result);
	 echo $varray[0];?></br></br>
	
	 
	</section>
  </div>
  </body>
</html>
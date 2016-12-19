<?php
session_start();
if(isset($_POST['submit']))
	
{
	include 'makeconnection.inc.php';
	
	$fname=$_POST['firstname'];
	$lname=$_POST['surname'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$pass=$_POST['password'];
	$cpass=$_POST['confirmpass'];
	$sex=$_POST['sex'];
	$id=uniqid();
	$_SESSION["curruser"] =$id;
	$name=$fname." ".$lname;
	$usertype=$_POST['usertype'];
	


	$sql="INSERT into users(userid,name,email,age,address,pincode,password,usertype,sex)values('$id','$name','$email','$age','$address','$pincode','$pass','$usertype','$sex')";
	 mysql_query($sql,$con);
    
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scriptfile.js" ></script>
<title>USER SIGNED UP</title>
<style>
#firstinfo
{
	margin-top:100px;
	height:400px;
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
  <div class="box6" id="firstinfo">
  <h1>MY INFO</h1>
     <strong>
	 <?php
	    echo 'YOUR USER ID IS : ';
		echo $_SESSION["curruser"]; 
	 ?>
	 </strong><br/><br/>
	 <strong>
	  NAME: 
	   <?php
	     $sql="select name from users where userid='$_SESSION[curruser]'";
		 $result=mysql_query($sql,$con);
		 $output=mysql_fetch_array($result);
		 echo $output[0];
	   ?>
	   </strong><br/><br/>
	    <strong>
	  EMAIL: 
	   <?php
	     $sql="select email from users where userid='$_SESSION[curruser]'";
		 $result=mysql_query($sql,$con);
		 $output=mysql_fetch_array($result);
		 echo $output[0];
	   ?>
	   </strong><br/><br/>
	      <strong>
	  ADDRESS: 
	   <?php
	     $sql="select address from users where userid='$_SESSION[curruser]'";
		 $result=mysql_query($sql,$con);
		 $output=mysql_fetch_array($result);
		 echo $output[0];
	   ?>
	   </strong><br/><br/>
	    <strong>
		PINCODE: 
	   <?php
	     $sql="select pincode from users where userid='$_SESSION[curruser]'";
		 $result=mysql_query($sql,$con);
		 $output=mysql_fetch_array($result);
		 echo $output[0];
	   ?>
	   </strong><br/><br/>
	    <strong>
		USER TYPE: 
	   <?php
	     $sql="select usertype from users where userid='$_SESSION[curruser]'";
		 $result=mysql_query($sql,$con);
		 $output=mysql_fetch_array($result);
		 echo $output[0];
	   ?>
	   </strong><br/><br/>
	   <strong>
		GENDER: 
	   <?php
	     $sql="select sex from users where userid='$_SESSION[curruser]'";
		 $result=mysql_query($sql,$con);
		 $output=mysql_fetch_array($result);
		 echo $output[0];
	   ?>
	   </strong><br/><br/>
	  
  </div>
 
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="residentinc.css" rel="stylesheet" type="text/css" />
<title>RESIDENT UPDATE</title>

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
 <div id="meatleft">
  <form id="residentupdate"  action="residentupdated.php" method="POST" >
  <fieldset class="box6">
  <h1>BILL GENERATE</h1>
  <input type="text" id="userid" placeholder="Userid" name="userid" class="styletextlongboxsignup" required autofocus><br /><br />
  <input type="text" id="month" placeholder="For Month" name="month" class="styletextlongboxsignup" required><br /><br />
  <input type="text" id="pincode" placeholder="Pincode" name="pincode" class="styletextlongboxsignup" required><br /><br />
  <input type="text" id="amount" placeholder="Amount" name="amount" class="styletextlongboxsignup" required><br /><br />
  <input type="submit" name="update" value="GENERATE BILL" class="btn"><br/><br/>
  </fieldset>
   <fieldset style="margin-top:10px;" class="box6"">
  <h1>ADMIN CONTROL PANEL</h1>
  
  <input type="button" name="update" value="UPDATE EXISTING BILLS" class="btn" onClick="document.location.href='updateresidentfile.php'"><br/><br/>
  
  <input type="button" name="update" value="DELETE EXISTING USERS" class="btn" onClick="document.location.href=''"><br/><br/>
  <input type="button" name="update" value="UPDATE EXISTING AREAS" class="btn" onClick="document.location.href='updateareafile.php'"><br/><br/>
  </fieldset>
  </form>
  </div>
 <div id="meatright" class="box6">
       <h1 style="text-align:center;">ADMIN FUNCTIONS!</h1>   
       
        <p>
        Water conservation encompasses the policies, strategies and activities made to manage fresh water as a sustainable resource, to protect the water environment, and to meet current and future human demand. Population, household size, and growth and affluence all affect how much water is used. Factors such as climate change will increase pressures on natural water resources especially in manufacturing and agricultural irrigation
       </p>
  
      
 </div>
  </body>
</html>
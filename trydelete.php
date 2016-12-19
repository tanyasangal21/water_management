
<?php
include 'makeconnection.inc.php';
$sql="delete from users where userid='56f8bc48cb3aa'";
mysql_query($sql,$con);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layoutadminupdates.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="logtheuserin.css" rel="stylesheet" type="text/css" />
<title>ADMIN DELETE USER</title>

</head>
<body style="margin:0px;">
<?php
include 'makeconnection.inc.php';

if(isset($_POST['delete']))
{
	$UPDATEQ = "delete from users WHERE userid='$_POST[hidden]'";
	mysql_query($UPDATEQ ,$con);
}
$dispflight= "SELECT userid,name,email,pincode,sex FROM users";
$result=mysql_query($dispflight);
$output=array();
echo "<table id=bill align=center>
<tr style=margin:5px;>
<th>USERID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>PINCODE</th>
<th>SEX</th>

</tr>";

while($qarray=mysql_fetch_array($result))
{
 echo "<form action=trydelete.php method=post >";
 echo "<tr>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=userid value=".$qarray['userid']. " < /td>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=name value=".$qarray['name']." < /td>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=email value=".$qarray['email']." < /td>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=pincode value=".$qarray['pincode']." < /td>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=sex value=".$qarray['sex']." < /td>";
 echo "<td>". "<input type=hidden class=styletextlongboxsignup name=hidden value=". $qarray['userid']. " < /td>";
 echo "<td>"."<input type=submit name=delete value=delete class=btn"." </td>";
 echo "</tr>";
 echo "</form>";
 
}
?>
</body>
</html>
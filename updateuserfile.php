<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layoutadminupdates.css" rel="stylesheet" type="text/css" />

<title>ADMIN UPDATES USER</title>

</head>
<body>
<?php
include 'makeconnection.inc.php';

if(isset($_POST['update']))
{
	$UPDATEQ = "UPDATE users SET name='$_POST[name]',email='$_POST[email]',address='$_POST[address]' WHERE userid='$_POST[hidden]'";
	mysql_query($UPDATEQ ,$con);
}
$dispusers= "SELECT userid,name,email,address FROM users";
$result=mysql_query($dispusers);
echo "<table align=center style=padding:2px;>
<tr style=margin:5px;>
<th>USERID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>ADDRESS</th>

</tr>";

while($qarray=mysql_fetch_array($result))
{
 echo "<form action=updateuserfile.php method=post >";
 echo "<tr>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=userid value=".$qarray['userid']. " < /td>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=name value=".$qarray['name']." < /td>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=email value=".$qarray['email']." < /td>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=address value=".$qarray['address']." < /td>";
 echo "<td>". "<input type=hidden class=styletextlongboxsignup name=hidden value=". $qarray['userid']. " < /td>";
 echo "<td>"."<input type=submit name=update value=update class=btn"." </td>";
 echo "</tr>";
 echo "</form>";
 
}
?>
</body>
</html>
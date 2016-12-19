<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="layoutadminupdates.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="logtheuserin.css" rel="stylesheet" type="text/css" />
<title>ADMIN UPDATES AREA</title>

</head>
<body style="margin:0px;">
<?php
include 'makeconnection.inc.php';

if(isset($_POST['update']))
{
	$UPDATEQ = "UPDATE areainfo SET mystream='$_POST[mystream]',boiler='$_POST[boiler]',bacteria='$_POST[bacteria]',contamination='$_POST[contamination]'WHERE pincode='$_POST[hidden]'";
	mysql_query($UPDATEQ ,$con);
}
$dispflight= "SELECT pincode,mystream,boiler,bacteria,contamination FROM areainfo";
$result=mysql_query($dispflight);
$output=array();
echo "<table id=bill align=center>
<tr style=margin:5px;>
<th>PINCODE</th>
<th>MYSTREAM NAME</th>
<th>BOILER LEVEL</th>
<th>BACTERIA LEVEL</th>
<th>CONTAMINATION LEVEL</th>

</tr>";

while($qarray=mysql_fetch_array($result))
{
 echo "<form action=updateareafile.php method=post >";
 echo "<tr>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=pincode value=".$qarray['pincode']. " < /td>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=mystream value=".$qarray['mystream']." < /td>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=boiler value=".$qarray['boiler']." < /td>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=bacteria value=".$qarray['bacteria']." < /td>";
 echo "<td>". "<input type=text class=styletextlongboxsignup name=contamination value=".$qarray['contamination']." < /td>";
 echo "<td>". "<input type=hidden class=styletextlongboxsignup name=hidden value=". $qarray['pincode']. " < /td>";
 echo "<td>"."<input type=submit name=update value=update class=btn"." </td>";
 echo "</tr>";
 echo "</form>";
 
}
?>
</body>
</html>
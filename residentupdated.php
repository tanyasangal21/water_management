<?php
include 'makeconnection.inc.php';
if(isset($_POST['update']))
{
	$month=$_POST['month'];
	$user=$_POST['userid'];
    $amount=$_POST['amount'];
	$sql="insert into bill(userid,month,billamount,pending)values('$user','$month','$amount','$amount')";
	mysql_query($sql,$con);
}

?>
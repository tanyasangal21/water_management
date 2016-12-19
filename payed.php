<?php
session_start();
include 'makeconnection.inc.php';
if(isset($_POST['payed']))
{
	 $amount=$_POST['amount'];
	 $bill=$_POST['billno'];
	 $_SESSION["bill"]=$bill;
	 $UPDATEQ = "UPDATE bill SET pending=pending-$amount WHERE billno=$bill";
	 mysql_query($UPDATEQ ,$con);
	 $sql="insert into reciet (userid,billno,payed)values('$_SESSION[curruser]',$bill,$amount)";
	 mysql_query($sql,$con);
	 include 'recietgenerate.php';
}
?>

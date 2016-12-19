<?php
if(isset($_POST['submit']))
{
	if($_POST['update']=="areainfo")
	{
		include 'areainfo.inc.php';
	}
	else if($_POST['update']=="resident")
	{
		include 'resident.inc.php';
	
	}
	if($_POST['update']=="employee")
	{
		echo 'include employee';
	}
	if($_POST['update']=="feedback")
	{
		include 'checkfeedback.inc.php';
	}
}
?>
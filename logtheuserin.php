<?php
session_start();
?>
<?php
include 'makeconnection.inc.php';
if(isset($_POST['submit']))
{
	$_SESSION["curruser"] = $_POST['userid'];
	if($_POST['confirmpass']==$_POST['password'])
	{
		$sql="select password from users where userid='$_SESSION[curruser]'";
		$result=mysql_query($sql,$con);
	    $varray=mysql_fetch_array($result);
	    if($_POST['password']==$varray[0])
		{
			include 'validlogin.php';
		}
		else{
			echo 'wrong password';
		}
	}	
    else{
		echo 'passwords do not match';
	}	
}
?>

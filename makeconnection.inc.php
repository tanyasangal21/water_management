<?php
$con = mysql_connect("localhost","utkarsh","password");//connection established
if(!$con){
	die("error");
}
mysql_select_db("software_engg",$con);

?>
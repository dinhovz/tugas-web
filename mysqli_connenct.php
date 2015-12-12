<?php 
	$user = "root";
	$pass = "";
	$host = "localhost";
	$dbase = "tugasrf";

	mysql_connect($host, $user, $pass) or die(mysql_error());
	$db = mysql_select_db($dbase) or die(mysql_error());
?>
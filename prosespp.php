<?php
	include('mysqli_connenct.php');
	session_start();

	$p = $_POST['pekerjaan'];
	

	

	$query = "INSERT INTO 'pekerjaan' (`pekerjaan`) VALUES ('$p);";
	$result = mysql_query($query) or die(mysql_error());

	$_SESSION['biodata']=$_POST['pekerjaan'];
header('location:view.php');
?>
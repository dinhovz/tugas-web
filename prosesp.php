<?php
	include('mysqli_connenct.php');
	session_start();

	$sd = $_POST['sd'];
	$smp = $_POST['smp'];
	$sma = $_POST['sma'];
	

	

	INSERT INTO `pendidikan` (`sd`, `smp`, `sma`) VALUES ('$sd', '$smp', '$sma');

	$_SESSION['biodata']=$_POST['username'];
header('location:pekerjaan.php');
?>
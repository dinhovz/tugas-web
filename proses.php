<?php
	include('mysqli_connenct.php');
	session_start();

	$user = $_POST['username'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];

	

	$query = "INSERT INTO `tugas` (`username`, `nama`, `alamat`, `telepon`) VALUES ('$user', '$nama', '$alamat', '$telepon');";
	$result = mysql_query($query) or die(mysql_error());

	$_SESSION['biodata']=$_POST['username'];
	header('location:pendidikan.php');

?>
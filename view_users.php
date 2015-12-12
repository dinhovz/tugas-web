<?php 
	
	include ('include/header.html');
 ?>

 	<h1> History </h1>
 		<p> 
 		<br>
 <?php
	include('mysqli_connenct.php');

	$query = "select * from tugas";
	$result = mysql_query($query) or die(mysql_error());
?>

	<div id="table4">
	<table width="100%" border="1px">
		<tr width="1000%">
			<td  width="40%">
				BIODATA
			</td>
			<td  width="30%">
				PENDIDIKAN
			</td>
			<td  width="30%">
				PEKERJAAN
			</td>
		</tr>


		<tr>
			<td colspan="" rowspan="" headers="">
				<?php
					while ($row = mysql_fetch_array($result)) 
					{
						echo "Username : $row[username]<br>";
						echo "Nama : $row[nama]<br>";
						echo "Alamat ; $row[alamat]<br>";
						echo "No Telepon : $row[telepon]";
						echo "<hr><br>";
					}	
					
				?>
			</td>

			<td colspan="" rowspan="" headers="">
				<?php
					$query = "select * from pendidikan";
					$result = mysql_query($query) or die(mysql_error());

					while ($row = mysql_fetch_array($result)) 
					{
						echo "SD : $row[sd]<br>";
						echo "SMP : $row[smp]<br>";
						echo "SMA : $row[sma]<br>";
						echo "<hr><br><br><br>";
					}
				?>
			</td>

			<td colspan="" rowspan="" headers="">
				<?php
					$query = "select * from pekerjaan";
					$result = mysql_query($query) or die(mysql_error());

					while ($row = mysql_fetch_array($result)) 
					{
						echo "Pekerjaan : $row[pekerjaan]<br>";
						
						echo "<hr><br><br><br>";
					}

				?>
			</td>
		</tr>

<!-- 
<?php
	while ($row = mysql_fetch_array($result)) 
	{
		echo "<tr>
				<td>Username : $row[username]<br>";
		echo "Nama : $row[nama]<br>";
		
		
		echo "Alamat ; $row[alamat]<br>";
		echo "No Telepon : $row[telepon]<br></td>";
	}	
	
?>
			
<?php
	$query = "select * from pendidikan";
	$result = mysql_query($query) or die(mysql_error());

	while ($row = mysql_fetch_array($result)) 
	{

		echo "<td>SD : $row[sd]<br>";
		echo "SMP : $row[smp]<br>";
		echo "SMA : $row[sma]<br></td>";

	}

?>
<?php
	$query = "select * from pekerjaan";
	$result = mysql_query($query) or die(mysql_error());

	while ($row = mysql_fetch_array($result)) 
	{

		echo "<td>Pekerjaan Sekarang : $row[pekerjaan]<br>";
		

	}

?>
 -->
 	</table>
 	</div>
	</p>
	<br>
<?php 
	include ('include/footer.html');
?>
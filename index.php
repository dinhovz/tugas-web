<?php
include('include/header.html')

?>


<h1>Input Biodata</h1>
<form action="proses.php" method="post">
<p>Username: <input type="text" name="username" size="15" maxlength="20" /></p>
<p>Nama: <input type="text" name="nama" size="15" maxlength="40" /></p>
<p>Alamat: <input type="text" name="alamat"  size="20" maxlength="60" /> </p>
<p>Nomer Telpepon: <input type="text" name="telepon" size="10" maxlength="20" /></p>
<p><input type="submit" value="Submit" name="submit" align="center"></p>
</form>

<?php include ('include/footer.html'); ?>
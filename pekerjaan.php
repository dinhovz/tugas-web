<?php
include('include/header.html')

?>


<h1>Input Pendidikan</h1>
<form action="prosespp.php" method="post">
<p>Pekerjaan Sekarang : <input type="text" name="pekerjaan" size="15" maxlength="20" /></p>

<p><input type="submit" value="Submit" name="submit" align="center"></p>
</form>

<?php include ('include/footer.html'); ?>
<?php
include('include/header.html')

?>


<h1>Input Pendidikan</h1>
<form action="prosesp.php" method="post">
<p>SD: <input type="text" name="sd" size="15" maxlength="20" /></p>
<p>SMP: <input type="text" name="smp" size="15" maxlength="40" /></p>
<p>SMA: <input type="text" name="sma"  size="20" maxlength="60" /> </p>

<p><input type="submit" value="Submit" name="submit" align="center"></p>
</form>

<?php include ('include/footer.html'); ?>
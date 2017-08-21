<?php
include 'connect.php';
?>
<?php

$b=$_GET['b'];
  $sql="delete from tax where tax_id='$b'";
  $delete=mysql_query($sql);
  if($delete==1)
	{
	echo"data deleted";
	}
	?>
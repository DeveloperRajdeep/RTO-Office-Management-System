<?php
include 'connect.php';
?>
<?php

$b=$_GET['b'];
  $sql="delete from learner where lrnr_id='$b'";
  $delete=mysql_query($sql);
  if($delete==1)
	{
	echo"data deleted";
	}
	?>
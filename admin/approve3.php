<?php
include 'connect.php';
?>
<?php
$today=date('Y-m-d');
				

if(isset($_GET['a']))
{
	$approve=$_GET['a'];
	$connect=mysql_query("update  tax  set status='approve',approvedate='$today' where tax_id=$approve");
	if($connect==1)
	{
		echo "approved";	
	}
	else
	{
		echo "error";
	}
}	
?>
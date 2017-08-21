<?php
include 'connect.php';
?>
<?php
$today=date('Y-m-d');
		$next_date= date('Y-m-d', strtotime($today. ' + 45 days'));		

if(isset($_GET['a']))
{
	$approve=$_GET['a'];
	$connect=mysql_query("update  vehicle_regis  set status='approve',approvedate='$today',licencevalidity='$next_date' where vhcl_id=$approve");
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
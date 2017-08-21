<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 540px;
	height: 341px;
	z-index: 1;
}
</style>
<div id="apDiv1">
<?php
include('connect.php');
		$ret=mysql_query("select * from ts order by id desc limit 1");
		$row=mysql_fetch_object($ret);
		echo "<strong>Title :</strong> ".$row->title."<br/>" ;
		//echo "<strong>Publish Date :</strong> ".$row->date ."<br/><br/>" ;
		echo "<strong></strong><img src='latestUpdates/$row->image'" ;
		//echo "<strong></strong> ".$row->content."<br/><br/>" ;	
?>
</div>
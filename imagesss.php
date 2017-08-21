<?php
include 'connect.php';
$file=$_FILES['file']['name'];

//$id=$_SESSION['sid'];

if(@$_REQUEST['submit'])
{
	if($_POST['title']=="")
	{
	$err= "fill the related data first";
	}
	
	else
	{
		
		mysql_query("insert into ts values('','{$_POST['title']}','$file')");
		
		move_uploaded_file($_FILES["file"]["tmp_name"], "latestUpdates/" . $_FILES["file"]["name"]);
		$err= "updated";
	}
	
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 798px;
	height: 425px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	width: 310px;
	height: 256px;
	z-index: 2;
	left: 392px;
	top: 85px;
}
</style>
</head>

<body>
<div id="apDiv1">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<?php echo @$err; ?>
<input type="text" name="title"  required/><br />
  <input type="file" name="file" id="file"/><br />
  <input type="submit" name="submit" id="button" value="Upload" /></br>
  <br />
  </form>


</div>
</body>
</html>
<?php include 'connect.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RTO Management System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="jimageslider/jsImgSlider/themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="jimageslider/jsImgSlider/themes/1/js-image-slider.js" type="text/javascript"></script>
<link href="jimageslider/jsImgSlider/generic.css" rel="stylesheet" type="text/css" />
	
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1359px;
	height: 635px;
	z-index: 1;
	left: 0px;
	top: 1px;
	background-image:url(backgrnd.jpg);
}
#apDiv2 {
	position: absolute;
	width: 557px;
	height: 61px;
	z-index: 2;
	left: 350px;
	top: 11px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 36px;
	text-align: center;
	color: #009;
}
#apDiv3 {
	position: absolute;
	width: 876px;
	height: 45px;
	z-index: 3;
	left: 195px;
	top: 98px;
}
#apDiv3 table {
	font-family: Verdana, Geneva, sans-serif;
}
#apDiv3 table {
	font-size: 24px;
}
#apDiv3 table {
	font-size: 16px;
}
#apDiv3 table {
	text-align: center;
	font-weight: bold;
}
#apDiv3 table {
	font-weight: normal;
}
#apDiv4 {
	position: absolute;
	width: 1336px;
	height: 122px;
	z-index: 2;
	left: 14px;
	top: 16px;
}
#apDiv5 {
	position: absolute;
	width: 89px;
	height: 108px;
	z-index: 1;
	left: 59px;
	top: 11px;
}
#apDiv6 {
	position: absolute;
	width: 722px;
	height: 99px;
	z-index: 2;
	left: 316px;
	top: 17px;
}
#apDiv7 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
	left: 1128px;
	top: 5px;
}
#apDiv8 {
	position: absolute;
	width: 1354px;
	height: 37px;
	z-index: 1;
	left: 4px;
	top: 597px;
	background-color: #306;
}
#apDiv9 {
	position: absolute;
	width: 564px;
	height: 40px;
	z-index: 2;
	left: 733px;
	top: 147px;
	font-size: 14px;
	color: #000;
}
#apDiv10 {
	position: absolute;
	width: 1338px;
	height: 33px;
	z-index: 1;
	left: 18px;
	top: 186px;
}
#apDiv11 {
	position: absolute;
	width: 926px;
	height: 358px;
	z-index: 3;
	left: 16px;
	top: 230px;
}
#apDiv12 {
	position: absolute;
	width: 374px;
	height: 228px;
	z-index: 4;
	left: 972px;
	top: 295px;
	background-image:
}
#apDiv1 #apDiv9 table tr td div {
	font-family: Verdana, Geneva, sans-serif;
}
#apDiv15 {
	position: absolute;
	width: 364px;
	height: 29px;
	z-index: 1;
	left: 5px;
	top: 2px;
	font-size: 18px;
	color: #FFF;
	text-align: center;
}
#apDiv16 {
	position: absolute;
	width: 366px;
	height: 289px;
	z-index: 2;
	left: 4px;
	top: 60px;
}
#apDiv1 #apDiv9 table {
	color: #FFF;
	font-size: 16px;
}
#apDiv17 {
	position: absolute;
	width: 366px;
	height: 181px;
	z-index: 2;
	left: 5px;
	top: 39px;
}
#apDiv1 #apDiv9 table {
	text-align: center;
}
#apDiv1 #apDiv9 table {
	text-align: center;
	color: #FFF;
}
#apDiv18 {
	position: absolute;
	width: 370px;
	height: 24px;
	z-index: 1;
	font-size: 14px;
	color: #FFF;
	text-align: center;
	top: 8px;
	left: -7px;
}
#apDiv19 {
	position: absolute;
	width: 430px;
	height: 24px;
	z-index: 2;
	left: 916px;
	top: 9px;
	font-size: 14px;
	text-align: center;
	color: #FFF;
}
#apDiv1 #apDiv12 #apDiv17 form table {
	font-size: 16px;
	color: #FFF;
	text-align: center;
}
#apDiv20 {
	position: absolute;
	width: 200px;
	height: 40px;
	z-index: 3;
	left: 161px;
	top: 215px;
}
</style>
</head>

<body>
<?php
$error="";
if(isset($_POST['login']))
{
	

$name=$_POST['fullname'];
$pass=$_POST['password'];

$sql=mysql_query("select * from user_registration where fullname='$name' and password='$pass'");
if($sql)
{
if(mysql_num_rows($sql)==1)
{
	$row=mysql_fetch_array($sql);
	$user_id=$row['user_id'];
	//echo $user_id;
	$_SESSION['name']=$name;
	$_SESSION['user_id']=$user_id;
	header("location:user_home.php");
}
}
else
{

		
		$error="Login Denied!!!";
}



}
?>
<div id="apDiv1">
  <div id="apDiv8">
    <div id="apDiv18">Regional Transport Office Management System</div>
    <div id="apDiv19">Developed By:Rajdeep Banerjee &amp; Biswajit Barman 2016</div>
  </div>
  <div id="apDiv9">
    <table width="559" height="40" border="0">
      <tr>
        <td width="64"><div align="center">Home</div></td>
        <td width="84"><div align="center">About Us</div></td>
        <td width="104"><div align="center">User Login</div></td>
        <td width="144"><div align="center">RTO Officer Login</div></td>
        <td width="141"><div align="center">Contact Us</div></td>
      </tr>
    </table>
  </div>
  
  <div id="apDiv10"><h3><marquee align="right"  behavior="alter" alteramount="5" onMouseOver="this.stop()" onMouseOut="this.start()">Welcome To The Web Application of Regional Transport Office Management System</marquee></h3></div>
    
  <div id="apDiv11"><div id="slider frame">
  <div id="slider">
  <a href="">
   <img src="photo1/01.jpg" alt="" /></a>
    <img src="photo1/02.jpg" alt="" />
     <img src="photo1/03.jpg" alt="" />
      <img src="photo1/04.jpg" alt="" />
  </div></div></div>
  <div id="apDiv12">
    <div id="apDiv15">USER LOGIN</div>
    <div id="apDiv17">
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
      <table width="362" height="174" border="0">
        <tr>
          <td height="63">User Name</td>
          <td>:</td>
          <td><input type="text" name="fullname" id="textfield2" required="required" /></td>
        </tr>
        <tr>
          <td height="40">Password</td>
          <td>:</td>
          <td><input type="password" name="password" id="textfield3" required="required" /></td>
        </tr>
        <tr>
          <td height="28"><a style="text-decoration:none;" href="user_registration.php">SignUp</a></td>
          <td>&nbsp;</td>
          <td><input type="submit" name="login" id="button" value="Login" /></td>
           
        </tr>
        <tr>
          <td height="28">&nbsp;</td>
          <td>&nbsp;</td>
          <td><?php echo $error ?></td>
        </tr>
      </table>
    </form>
    </div>
   
  </div>
</div>
<div id="apDiv4">
  <div id="apDiv5"><img src="govtindia.jpg" width="83" height="107" /></div>
  <div id="apDiv6"><img src="ministry.png" width="684" height="92" /></div>
  <div id="apDiv7"></div>
</div>
</body>
</html>

<?php
include 'connect.php';
error_reporting(0);
session_start();
$user=$_SESSION['name'];
$user_id=$_SESSION['user_id'];
if($user==null)
{
	header("location:user_login.php");
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 691px;
	height: 684px;
	z-index: 1;
	left: 225px;
	top: -9px;
}
#apDiv2 {
	position: absolute;
	width: 539px;
	height: 538px;
	z-index: 2;
	left: 363px;
	top: 134px;
}
#apDiv3 {
	position: absolute;
	width: 153px;
	height: 31px;
	z-index: 1;
	left: 153px;
	top: 4px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv4 {
	position: absolute;
	width: 456px;
	height: 491px;
	z-index: 2;
	left: 46px;
	top: 38px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
}
#apDiv5 {
	position: absolute;
	width: 264px;
	height: 53px;
	z-index: 3;
	left: 507px;
	top: -108px;
}
@media print {
.noPrint {
    display:none;
  }
}
#apDiv6 {
	position: absolute;
	width: 663px;
	height: 110px;
	z-index: 1;
	left: 11px;
	top: 27px;
}
#apDiv7 {
	position: absolute;
	width: 119px;
	height: 108px;
	z-index: 1;
	top: 1px;
}
#apDiv8 {
	position: absolute;
	width: 537px;
	height: 93px;
	z-index: 2;
	left: 132px;
	top: 29px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv1 #apDiv8 p {
	text-align: center;
}
#apDiv9 {
	position: absolute;
	width: 108px;
	height: 35px;
	z-index: 3;
	left: 578px;
	top: 11px;
}
#apDiv10 {
	position: absolute;
	width: 456px;
	height: 59px;
	z-index: 3;
	left: 13px;
	top: 536px;
}
</style>

</head>

<body>
<div id="apDiv1">
  <div id="apDiv6">
    <div id="apDiv7"><img src="assam+goverment+logo.jpg" width="117" height="106" /></div>
  </div>
  <div id="apDiv8">
    <p>INDIAN DRIVING LICENCE(Assam)</p>
    <p>Assam Schedule-LIX(Part IV) Form No.7 MV RULE-16(2)</p>
  </div>
  <div id="apDiv9"><input class="noPrint" type="button" onclick="window.print()" value="print"></div>
</div>
<div id="apDiv2">
  <div id="apDiv3">Tax Pay Challan</div>
  <div id="apDiv4">
    <table width="441" height="486" border="0">
     <?php
  $sql="select DISTINCT(usr_id),vnumber,myprice,myqty,mytotal,date,status,approvedate from tax where usr_id=$user_id" ;
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
      <tr>
        <td width="216">Tax Id</td>
        <td width="10">:</td>
        <td width="203">TAX00<?php echo $row['usr_id']?></td>
      </tr>
      <tr>
        <td>Vehicle Number</td>
        <td>:</td>
        <td><?php echo $row['vnumber'] ?></td>
      </tr>
      <tr>
        <td>Vehicle Price</td>
        <td>:</td>
        <td>Rs.<?php echo $row['myprice'] ?></td>
      </tr>
      <tr>
        <td>Tax Paid For</td>
        <td>:</td>
        <td><?php echo $row['myqty'] ?> years</td>
      </tr>
      <tr>
        <td>Tax Paid</td>
        <td>:</td>
        <td>Rs.<?php echo $row['mytotal'] ?></td>
      </tr>
      <tr>
        <td>Date of generating challan</td>
        <td>:</td>
        <td><?php echo $row['date'] ?></td>
      </tr>
      <tr>
        <td>Date of pay</td>
        <td>:</td>
        <td></td>
      </tr>
      <tr>
        <td>Signature
        of RTO Officer</td>
        <td>:</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="78">Seal of RTO Office</td>
        <td>:</td>
        <td>&nbsp;</td>
      </tr>
      <?php
      }
	  ?>
    </table>
  </div>
</div>
</body>
</html>
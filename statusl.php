<?php
include 'connect.php';
session_start();
$user=$_SESSION['name'];
$user_id=$_SESSION['user_id'];
if($user==null)
{
	header("location:user_login.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1372px;
	height: 634px;
	z-index: 1;
	left: -10px;
	top: 3px;
	text-align: center;
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
	width: 1293px;
	height: 59px;
	z-index: 3;
	left: 43px;
	top: 98px;
}
#apDiv1 #apDiv3 table {
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
	width: 323px;
	height: 35px;
	z-index: 4;
	left: 41px;
	top: 170px;
	text-align: justify;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv5 {
	position: absolute;
	width: 234px;
	height: 27px;
	z-index: 2;
	top: 2px;
}
#apDiv6 {
	position: absolute;
	width: 1034px;
	height: 245px;
	z-index: 5;
	left: 147px;
	top: 226px;
}
#apDiv7 {
	position: absolute;
	width: 283px;
	height: 25px;
	z-index: 1;
	left: 360px;
	top: 4px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv8 {
	position: absolute;
	width: 1022px;
	height: 186px;
	z-index: 2;
	left: 7px;
	top: 45px;
}
#apDiv1 #apDiv6 #apDiv8 table {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	text-align: center;
}
</style>
</head>

<body>
<div id="apDiv1">
  <div id="apDiv6">
    <div id="apDiv8">
      <table width="1009" height="132" border="1">
        <tr>
          <td width="62">LLR ID</td>
          <td width="78">Full Name</td>
          <td width="89">Father Name</td>
          <td width="98">Address</td>
          <td width="97">Contact No.</td>
          <td width="83">Licence Type</td>
          <td width="67">Status</td>
          <td width="84">Date of Registration</td>
          <td width="71">Approve Date</td>
           <td width="69">Licence Validity</td>
          <td width="128">View LLR ID CARD</td>
        </tr>
        
		
         <?php
  $sql="select DISTINCT(usr_id),fullname,fname,address,contact,licence,date,status,approvedate,licencevalidity from learner where usr_id=$user_id" ;
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
        <tr>
          <td>LL00<?php echo $row['usr_id']?></td>
         <td><?php echo $row['fullname'] ?></td>
          <td><?php echo $row['fname'] ?></td>
          <td><?php echo $row['address'] ?></td>
          <td><?php echo $row['contact'] ?></td>
          <td><?php echo $row['licence'] ?> wheeler</td>
          <td><?php echo $row['status']?></td>
          <td><?php echo $row['date'] ?> </td>
           <td><?php echo $row['approvedate'] ?> </td>
          <td><?php echo $row['licencevalidity'] ?> </td>
          <td><a href="print_llr.php" target="_blank"><img src="printer.png" /></a> </td>
        </tr>
		<?php
      }
	  ?>
      </table>
    </div>
    <div id="apDiv7">Status of Learner Licence</div>
  </div>
  <div id="apDiv4">Welcome 
    <div id="apDiv5"></div>
  </div>
  <div id="apDiv3">
    <table width="1290" height="56" border="0">
      <tr>
        <td width="81" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="user_home.php">Profile</a></td>
      <td width="129" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="license.php">Licence</a></td>
        <td width="182" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="status.php">Status of Licence</a></td>
        <td width="154" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="registration.php">Registration</a></td>
        <td width="218" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="statusr.php">Status of Registration</a></td>
        <td width="102" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="tax.php">Tax</a></td>
        <td width="166" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="statust.php">Status of Tax</a></td>
        <td width="107" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="renewal.php">Renewal</a></td>
        <td width="93" bgcolor="#D6D6D6"><a href="user_logout.php">Logout</a></td>
      </tr>
    </table>
  </div>
<div id="apDiv2">RTO Management System</div>
</div>
</body>
</html>
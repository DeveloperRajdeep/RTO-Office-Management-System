<?php
include 'connect.php';
session_start();
$user=$_SESSION['user'];
if($user==null)
{
	header("location:admin_login.php");
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
	width: 1036px;
	height: 59px;
	z-index: 3;
	left: 145px;
	top: 96px;
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
	width: 575px;
	height: 35px;
	z-index: 4;
	left: 45px;
	top: 198px;
	text-align: justify;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv5 {
	position: absolute;
	width: 234px;
	height: 27px;
	z-index: 2;
	top: 5px;
	left: 220px;
}
#apDiv6 {
	position: absolute;
	width: 1326px;
	height: 383px;
	z-index: 5;
	left: 24px;
	top: 245px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
}
#apDiv7 {
	position: absolute;
	width: 293px;
	height: 25px;
	z-index: 1;
	left: 6px;
	top: 4px;
	font-size: 18px;
	font-style: normal;
	font-weight: normal;
}
#apDiv8 {
	position: absolute;
	width: 1299px;
	height: 159px;
	z-index: 2;
	left: 3px;
	top: 40px;
	text-align: justify;
}
</style>
</head>

<body>
<div id="apDiv1">
  <div id="apDiv6">
    <div id="apDiv8">
      <table width="1308" height="132" border="1">
        <tr>
          <td width="55">Serial Number</td>
          <td width="73">User_Id</td>
          <td width="62">Full Name</td>
          <td width="81">Father Name</td>
          <td width="85">Address</td>
          <td width="80">Email Id</td>
          <td width="74">Contact No.</td>
          <td width="74">Licence Type</td>
          <td width="64">Date of Birth</td>
          <td width="71">Gender</td>
          <td width="67">Blood Group</td>
          <td width="87">Qualification</td>
          <td width="122">Learner_Validity</td>
          <td width="72">Date</td>
          <td width="78">Approve</td>
          <td width="63">Deny</td>
        </tr>
         <?php
  $sql="select * from permanent where status='processing'";
  $res=mysql_query($sql);
  $j=1;
  while($row=mysql_fetch_array($res))
  {
  ?>
        <tr>
          <td><?php echo $j++ ?></td>
          <td><?php echo $row['usr_id'] ?></td>
          <td><?php echo $row['fullname'] ?></td>
          <td><?php echo $row['fname'] ?></td>
          <td><?php echo $row['address'] ?></td>
          <td><?php echo $row['email'] ?></td>
          <td><?php echo $row['contact'] ?></td>
          <td><?php echo $row['licence'] ?></td>
          <td><?php echo $row['dob'] ?></td>
          <td><?php echo $row['gender'] ?></td>
          <td><?php echo $row['blood'] ?></td>
          <td><?php echo $row['qualification'] ?></td>
          <td><?php echo $row['licencevalidity'] ?></td>
          <td><?php echo $row['date'] ?></td>
          <td><a href="approve2.php?a=<?php echo $row["prmnt_id"]?>"><img src="icon/tick.png"></a></td>
          <td><a href="deny2.php?b=<?php echo $row["prmnt_id"]?>"><img src="icon/delete.png"></a></td>
        </tr>
        <?php
      }
	  ?>
      </table>
    </div>
    <div id="apDiv7">Permanent Licence Registration</div>
  </div>
  <div id="apDiv4">Welcome To RTO Officer
    <div id="apDiv5"></div>
  </div>
  <div id="apDiv3">
    <table width="1020" height="56" border="0">
      <tr>
        <td width="149" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="rusers.php">Registered Users</a></td>
        <td width="100" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="llr.php">LLR</a></td>
        <td width="106" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="plr.php">PLR</a></td>
        <td width="199" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="vr.php">Vehicle Registrations</a></td>
        <td width="133" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="tax.php">Tax Details</a></td>
        <td width="145" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="renewal.php">Renewal Details</a></td>
        <td width="158" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="admin_logout.php">Logout</a></td>
      </tr>
    </table>
  </div>
<div id="apDiv2">RTO Management System</div>
</div>
</body>
</html>
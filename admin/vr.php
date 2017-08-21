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
	left: 19px;
	top: 179px;
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
	width: 826px;
	height: 509px;
	z-index: 4;
	left: 203px;
	top: 201px;
}
#apDiv7 {
	position: absolute;
	width: 815px;
	height: 497px;
	z-index: 1;
	left: 5px;
	top: 5px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	text-align: justify;
}
#apDiv8 {
	position: absolute;
	width: 244px;
	height: 24px;
	z-index: 5;
	left: 19px;
	top: 221px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
}
#apDiv9 {
	position: absolute;
	width: 1342px;
	height: 131px;
	z-index: 6;
	left: 18px;
	top: 254px;
}
#apDiv10 {
	position: absolute;
	width: 1335px;
	height: 115px;
	z-index: 1;
	left: 4px;
	top: 10px;
}
</style>
</head>

<body>
<div id="apDiv1">
  <div id="apDiv4">Welcome To RTO Officer
    <div id="apDiv5"></div>
  </div>
  <div id="apDiv8">Vehicle Registration Details:</div>
  <div id="apDiv9">
    <div id="apDiv10">
      <table width="1317" height="112" border="1">
        <tr>
          <td width="41">Serial No.</td>
          <td width="41">Vehicle Type</td>
          <td width="41">Vehicle No.</td>
          <td width="41">Chasis No.</td>
          <td width="41">Engine No.</td>
          <td width="41">Model No.</td>
          <td width="41">Mfg By</td>
          <td width="41">Mfg Date</td>
          <td width="41">No.of Cylinder</td>
          <td width="41">Weight</td>
          <td width="41">Seat Capacity</td>
          <td width="41">Wheel Base</td>
          <td width="41">Body Type</td>
          <td width="41">Vehicle Class</td>
          <td width="41">Color</td>
          <td width="41">Fuel used</td>
          <td width="41">Vehicle CC</td>
          <td width="41">Customer Name</td>
          <td width="41">Contact</td>
          <td width="41">Address</td>
          <td width="41">Date</td>
          <td width="41">Valid Upto</td>
          <td width="41">Approve</td>
          <td width="94">Deny</td>
        </tr>
		 <?php
  $sql="select * from vehicle_regis where status='processing'";
  $res=mysql_query($sql);
  $j=1;
  while($row=mysql_fetch_array($res))
  {
  ?>
        <tr>
			<td><?php echo $j++?></td>
			<td><?php echo $row['vtype'] ?></td>
			<td><?php echo $row['carnum'] ?></td>
			<td><?php echo $row['chasisnum'] ?></td>
			<td><?php echo $row['enginenum'] ?></td>
		    <td><?php echo $row['modelnum'] ?></td>
			<td><?php echo $row['mfdname'] ?></td>
			<td><?php echo $row['mfddate'] ?></td>
			<td><?php echo $row['numcylinder'] ?></td>
			<td><?php echo $row['weight'] ?></td>
			<td><?php echo $row['seatcapacity'] ?></td>
			<td><?php echo $row['wheelbase'] ?></td>
			<td><?php echo $row['bodytype'] ?></td>
			<td><?php echo $row['vclass'] ?></td>
			<td><?php echo $row['color'] ?></td>
			<td><?php echo $row['fuel'] ?></td>
			<td><?php echo $row['vcc'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['contact'] ?></td>
			<td><?php echo $row['address'] ?></td>
			<td><?php echo $row['date'] ?></td>
			<td><?php echo $row['validupto'] ?></td>
		   <td><a href="approve1.php?a=<?php echo $row["vhcl_id"]?>"><img src="icon/tick.png"></a></td>
          <td><a href="deny1.php?b=<?php echo $row["vhcl_id"]?>"><img src="icon/delete.png"></a></td>
        </tr>
		<?php
      }
	  ?>
      </table>
    </div>
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